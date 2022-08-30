<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use App\Components\MenusRecusive;
use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenusController extends Controller
{
    private $menusRecusive;
    private $menu;
    /**
     * Class constructor.
     */
    public function __construct(MenusRecusive $menusRecusive, Menu $menu)
    {
        $this->menusRecusive = $menusRecusive;
        $this->menu = $menu;
    }
    public function index()
    {
        $menus = $this->menu->paginate(10);
        return view('admin.menus.menu', compact('menus'));
    }

    public function create()
    {
        $optionSelect = $this->menusRecusive->menuRecusiveAdd();
        return view('admin.menus.create', compact('optionSelect'));
    }

    public function store(Request $request)
    {
        $this->menu->create([
            'name' => $request->menus_name,
            'parent_id' => $request->parent_id,
            'slug' => Str::slug($request->menus_name, "-")
        ]);
        return redirect()->route('menus.create');
    }

    public function edit($id, Request $request)
    {
        $menuFollowIdEdit = $this->menu->find($id);
        $optionSelect = $this->menusRecusive->menuRecusiveEdit($menuFollowIdEdit->parent_id);
        return view('admin.menus.edit', compact('optionSelect', 'menuFollowIdEdit'));
    }

    public function update($id, Request $request)
    {
        $this->menu->find($id)->update(
            [
                'name' => $request->menus_name,
                'parent_id' => $request->parent_id,
                'slug' => Str::slug($request->name, '-')
            ]
        );
        return back();
    }

    public function delete($id)
    {
        $this->menu->find($id)->delete();
        return redirect()->route('menus.menu');
    }
}
