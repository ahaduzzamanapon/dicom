<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateImageCategoryRequest;
use App\Http\Requests\UpdateImageCategoryRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\ImageCategory;
use Illuminate\Http\Request;
use Flash;
use Response;

class ImageCategoryController extends AppBaseController
{
    /**
     * Display a listing of the ImageCategory.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        /** @var ImageCategory $imageCategories */
        $imageCategories = ImageCategory::paginate(10);

        return view('image_categories.index')
            ->with('imageCategories', $imageCategories);
    }

    /**
     * Show the form for creating a new ImageCategory.
     *
     * @return Response
     */
    public function create()
    {
        return view('image_categories.create');
    }

    /**
     * Store a newly created ImageCategory in storage.
     *
     * @param CreateImageCategoryRequest $request
     *
     * @return Response
     */
    public function store(CreateImageCategoryRequest $request)
    {
        $input = $request->all();

        /** @var ImageCategory $imageCategory */
        $imageCategory = ImageCategory::create($input);

        Flash::success('Image Category saved successfully.');

        return redirect(route('imageCategories.index'));
    }

    /**
     * Display the specified ImageCategory.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var ImageCategory $imageCategory */
        $imageCategory = ImageCategory::find($id);

        if (empty($imageCategory)) {
            Flash::error('Image Category not found');

            return redirect(route('imageCategories.index'));
        }

        return view('image_categories.show')->with('imageCategory', $imageCategory);
    }

    /**
     * Show the form for editing the specified ImageCategory.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var ImageCategory $imageCategory */
        $imageCategory = ImageCategory::find($id);

        if (empty($imageCategory)) {
            Flash::error('Image Category not found');

            return redirect(route('imageCategories.index'));
        }

        return view('image_categories.edit')->with('imageCategory', $imageCategory);
    }

    /**
     * Update the specified ImageCategory in storage.
     *
     * @param int $id
     * @param UpdateImageCategoryRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateImageCategoryRequest $request)
    {
        /** @var ImageCategory $imageCategory */
        $imageCategory = ImageCategory::find($id);

        if (empty($imageCategory)) {
            Flash::error('Image Category not found');

            return redirect(route('imageCategories.index'));
        }

        $imageCategory->fill($request->all());
        $imageCategory->save();

        Flash::success('Image Category updated successfully.');

        return redirect(route('imageCategories.index'));
    }

    /**
     * Remove the specified ImageCategory from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var ImageCategory $imageCategory */
        $imageCategory = ImageCategory::find($id);

        if (empty($imageCategory)) {
            Flash::error('Image Category not found');

            return redirect(route('imageCategories.index'));
        }

        $imageCategory->delete();

        Flash::success('Image Category deleted successfully.');

        return redirect(route('imageCategories.index'));
    }
}
