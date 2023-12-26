<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Blog::all();
        return view('blog.index')->with('posts', $posts);
    }
    public function showAll()
    {
        $posts = Blog::all();
        return view('blog')->with('posts', $posts);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blog.crear');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required', 'parrafoPrincipal' => 'required', 'parrafoSecundario' => 'required', 'imagenFondo' => 'required|image|mimes:jpeg,png|max:1024', 'imagenPrincipal' => 'required|image|mimes:jpeg,png|max:1024', 'imagenSecundaria' => 'required|image|mimes:jpeg,png|max:1024'
        ]);
        $post = $request->all();

        if ($imagenFondo = $request->file('imagenFondo')) {
            $rutaGuardarImagen = 'images/blog/';
            $imagenBlogFondo = date('YmdHis') . "." . $imagenFondo->getClientOriginalExtension();
            $imagenFondo->move($rutaGuardarImagen, $imagenBlogFondo);
            $post['imagenFondo'] = $imagenBlogFondo;
        }

        if ($imagenPrincipal = $request->file('imagenPrincipal')) {
            $rutaGuardarImagenPrincipal = 'images/blog/';
            $imagenBlogPrincipal = date('YmdHis') . "_principal." . $imagenPrincipal->getClientOriginalExtension();
            $imagenPrincipal->move($rutaGuardarImagenPrincipal, $imagenBlogPrincipal);
            $post['imagenPrincipal'] = $imagenBlogPrincipal;
        }

        if ($imagenSecundaria = $request->file('imagenSecundaria')) {
            $rutaGuardarImagenSecundaria = 'images/blog/';
            $imagenBlogSecundaria = date('YmdHis') . "_secundaria." . $imagenSecundaria->getClientOriginalExtension();
            $imagenSecundaria->move($rutaGuardarImagenSecundaria, $imagenBlogSecundaria);
            $post['imagenSecundaria'] = $imagenBlogSecundaria;
        }

        $titulo = $post['titulo'];
        Blog::create($post);
        $mensaje = 'Se ha creado el post ' . $titulo . ' satisfactoriamente.';

        return redirect()->route('blog.index')->with('success', $mensaje);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $post = Blog::find($id);
        return view('layouts.viewPost', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $blog = Blog::find($id);
        return view('blog.editar')->with('blog', $blog);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'titulo' => 'required', 'parrafoPrincipal' => 'required', 'parrafoSecundario' => 'required'
        ]);
        $post = $request->all();
        if ($imagenFondo = $request->file('imagenFondo')) {
            $rutaGuardarImagen = 'images/blog/';
            $imagenBlogFondo = date('YmdHis') . "." . $imagenFondo->getClientOriginalExtension();
            $imagenFondo->move($rutaGuardarImagen, $imagenBlogFondo);
            $post['imagenFondo'] = $imagenBlogFondo;
        } else {
            unset($post['imagenFondo']);
        }

        if ($imagenPrincipal = $request->file('imagenPrincipal')) {
            $rutaGuardarImagenPrincipal = 'images/blog/';
            $imagenBlogPrincipal = date('YmdHis') . "_principal." . $imagenPrincipal->getClientOriginalExtension();
            $imagenPrincipal->move($rutaGuardarImagenPrincipal, $imagenBlogPrincipal);
            $post['imagenPrincipal'] = $imagenBlogPrincipal;
        } else {
            unset($post['imagenPrincipal']);
        }

        if ($imagenSecundaria = $request->file('imagenSecundaria')) {
            $rutaGuardarImagenSecundaria = 'images/blog/';
            $imagenBlogSecundaria = date('YmdHis') . "_secundaria." . $imagenSecundaria->getClientOriginalExtension();
            $imagenSecundaria->move($rutaGuardarImagenSecundaria, $imagenBlogSecundaria);
            $post['imagenSecundaria'] = $imagenBlogSecundaria;
        } else {
            unset($post['imagenSecundaria']);
        }
        $blog->update($post);
        $titulo = $post['titulo'];
        $mensaje = 'Se ha actualizado el post ' . $titulo . ' satisfactoriamente.';

        return redirect()->route('blog.index')->with('success', $mensaje);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $postId = $request->input('delete-post-id');
        $post = Blog::find($postId);

        if (!$post) {
            return redirect()->route('blog.index')->with('error', 'El post no se encontró o ya ha sido eliminado.');
        }

        $imagenFondo = $post->imagenFondo;
        $imagenPrincipal = $post->imagenPrincipal;
        $imagenSecundaria = $post->imagenSecundaria;

        $post->delete();

        if ($imagenFondo) {
            Storage::delete('images/blog/' . $imagenFondo);
        }
        if ($imagenPrincipal) {
            Storage::delete('images/blog/' . $imagenPrincipal);
        }
        if ($imagenSecundaria) {
            Storage::delete('images/blog/' . $imagenSecundaria);
        }

        $mensaje = 'Se ha eliminado el post "' . $post->titulo . '" satisfactoriamente.';
        return redirect()->route('blog.index')->with('success', $mensaje);
    }
}
