<?php 
/*
namespace App\Http\Controllers;

use App\Test;
use Illuminate\Http\Request;


*/

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

use Kalnoy\Nestedset\Collection;

class CategoriesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $categories = Category::defaultOrder()->get();
        
		return view('categories.index', compact('categories'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(Request $input)
	{
        $data = $input->only('parent_id');

        $categories = $this->getCategoryOptions();

		return view('categories.create', compact('data', 'categories'));
	}

    /**
     * Store a newly created resource in storage.
     *
     * @param PostCategoryRequest $input
     *
     * @return Response
     */
	public function store(Request $request)
	{
		$request->validate([
            'title' => 'required',
            //'parent_id' => 'exists:categories,id',
        ]);
		
		
		$category = Category::create($request->all());

        return redirect()
            ->route('categories.show', [ $category->getKey() ])
            ->with('success', 'Category successfully created!');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$category = Category::findOrFail($id);
		
		$categories = Category::defaultOrder()->get();

        return view('categories.show', compact('category', 'categories'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		/** @var Category $category */
		$category = Category::findOrFail($id);

		$categories = $this->getCategoryOptions($category);

		return view('categories.edit', compact('category', 'categories'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		$request->validate([
            'title' => 'required',
            //'parent_id' => 'exists:categories,id',
        ]);
		/** @var Category $category */
		$category = Category::findOrFail($id);

		$category->update($request->all());

		return redirect()->route('categories.show', [ $id ])->with('success', 'Category successfully updated!');
	}

    /**
     * @param Collection $items
     *
     * @return static
     */
    protected function makeOptions(Collection $items)
    {
        $options = [ '' => 'Root' ];

        foreach ($items as $item)
        {
            $options[$item->getKey()] = str_repeat('‒', $item->depth + 1).' '.$item->title;
        }

        return $options;
    }

	/**
	 * @param Category $except
	 *
	 * @return CategoriesController
	 */
	protected function getCategoryOptions($except = null)
	{
		/** @var \Kalnoy\Nestedset\QueryBuilder $query */
		$query = Category::select('id', 'title')->withDepth();

		if ($except)
		{
			$query->whereNotDescendantOf($except)->where('id', '<>', $except->id);
		}

		return $this->makeOptions($query->get());
	}
}
