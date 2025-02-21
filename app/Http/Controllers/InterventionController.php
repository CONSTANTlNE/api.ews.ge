<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;


class InterventionController extends Controller
{
    /**
     * Resize
     *
     * Resizes an uploaded image based on width and height parameters.
     *
     * It is possible to provide only width or only height.
     *
     * Please note that the image will be resized without preserving the aspect ratio and will not be cropped, so the image might be distorted.
     *
     */
    public function resize(Request $request)
    {
        try {
            $validated = $request->validate([
                'file'   => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
                'width'  => 'nullable|numeric|required_without:height',
                'height' => 'nullable|numeric|required_without:width',
            ]);
        } catch (ValidationException $e) {
            return response()->json([
                'message' => 'Validation failed',
                'errors'  => $e->errors(),
            ], 422);
        }


        $uploadedFile = $request->file('file');

        $manager = new ImageManager(new Driver());
        $image   = $manager->read($uploadedFile);

        if ($request->width != null && $request->height != null) {
            $custom = $image->resize($request->width, $request->height);
        } elseif ($request->width != null) {
            $custom = $image->resize(width: $request->width);
        } elseif ($request->height != null) {
            $custom = $image->resize(height: $request->width);
        }

        $encoded = $custom->encode();

        $mimeType = $uploadedFile->getClientMimeType();

        // Return the resized image directly in the response
        return response($encoded, 200)
            ->header('Content-Type', $mimeType);
    }


    /**
     * Resize (maintain aspect ratio)
     *
     * Resizes images proportionally based on width or height parameters.
     *
     *
     * The image will be resized while preserving the aspect ratio
     *
     * The resulting size may differ from the given arguments, because the aspect ratio will be maintained preferably.
     */
    public function scale(Request $request)
    {
        try {
            $validated = $request->validate([
                'file'   => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
                'width'  => 'nullable|numeric|required_without:height',
                'height' => 'nullable|numeric|required_without:width',
            ]);
        } catch (ValidationException $e) {
            return response()->json([
                'message' => 'Validation failed',
                'errors'  => $e->errors(),
            ], 422);
        }


        $uploadedFile = $request->file('file');

        $manager = new ImageManager(new Driver());
        $image   = $manager->read($uploadedFile);

        if ($request->width != null && $request->height != null) {
            $custom = $image->scale($request->width, $request->height);
        } elseif ($request->width != null) {
            $custom = $image->scale(width: $request->width);
        } elseif ($request->height != null) {
            $custom = $image->scale(height: $request->width);
        }


        $encoded = $custom->encode();

        $mimeType = $uploadedFile->getClientMimeType();

        // Return the resized image directly in the response
        return response($encoded, 200)
            ->header('Content-Type', $mimeType);
    }

    /**
     * Convert.
     *
     *
     * Converts an uploaded image to WEBP, JPEG, PNG, GIF and AVIF format.
     *
     */
    public function convert(Request $request)
    {
        try {
            $validated = $request->validate([
                'file'   => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
                'format' => 'required|in:jpeg,png,gif,webp,avif',
            ]);
        } catch (ValidationException $e) {
            return response()->json([
                'message' => 'Validation failed',
                'errors'  => $e->errors(),
            ], 422);
        }

        $format = $request->input('format');


        $uploadedFile = $request->file('file');

        $manager = new ImageManager(new Driver());
        $image   = $manager->read($uploadedFile);

        if ($format === 'webp') {
            $encoded = $image->toWebp();
        }

        if ($format === 'jpeg') {
            $encoded = $image->toJpeg();
        }

        if ($format === 'png') {
            $encoded = $image->toPng();
        }


        if ($format === 'gif') {
            $encoded = $image->toGif();
        }


        if ($format === 'avif') {
            $encoded = $image->toAvif();
        }


        // Return the resized image directly in the response
        return response($encoded, 200)
            ->header('Content-Type', 'image/'.$format);
    }


    /**
     * Cropping & Resizing Combined.
     *
     * Two-step combination of trimming excess pixels and resizing to achieve a certain result size.
     *
     * Takes the given dimensions and scales it to the largest possible size matching the original size. Then this size is positioned on the original and cut out before being resized to the desired size from the arguments
     *
     */
    public function fit(Request $request)
    {
        try {
            $validated = $request->validate([
                'file'   => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
                'width'  => 'required|numeric',
                'height' => 'required|numeric',
            ]);
        } catch (ValidationException $e) {
            return response()->json([
                'message' => 'Validation failed',
                'errors'  => $e->errors(),
            ], 422);
        }


        $uploadedFile = $request->file('file');

        $manager = new ImageManager(new Driver());
        $image   = $manager->read($uploadedFile);

        $custom = $image->cover($request->width, $request->height);


        $encoded = $custom->encode();

        $mimeType = $uploadedFile->getClientMimeType();

        // Return the resized image directly in the response
        return response($encoded, 200)
            ->header('Content-Type', $mimeType);
    }
}
