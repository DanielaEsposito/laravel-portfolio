<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        $posts->map(function ($post) {
            $post->content = Str::words($post->content, 6, '...');
            return $post;
        });
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('posts.create', compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            //in questo modo do un nome diverso al file per evitare che ci siano immagini con lo stesso nome
            $fileName = time() . '_' . $file->getClientOriginalName();
            //Sposto il file caricato nella cartella public/images/.
            //public_path('images') -> Restituisce il percorso reale della cartella public/images/
            $file->move(public_path('images'), $fileName);
            $data['image'] = 'images/' . $fileName;
        };

        $newPost = new Post();
        $newPost->title = $data['title'];
        $newPost->author = $data['author'];
        $newPost->category_id = $data['category_id'];
        $newPost->content = $data['content'];
        $newPost->image = $data['image'] ?? null;
        $newPost->github_link = $data['github_link'];
        $newPost->published_at = $data['published_at'];
        $newPost->save();
        //dopo aver salvato il post
        //aggiungo l'array di tags
        if ($request->has('tags')) {

            $newPost->tags()->attach($data['tags']);
        }

        return redirect()->route('posts.show', $newPost->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {


        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('posts.edit', compact('post', 'categories', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $data = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            //in questo modo do un nome diverso al file per evitare che ci siano immagini con lo stesso nome
            $fileName = time() . '_' . $file->getClientOriginalName();
            //Sposto il file caricato nella cartella public/images/.
            //public_path('images') -> Restituisce il percorso reale della cartella public/images/
            $file->move(public_path('images'), $fileName);
            $data['image'] = 'images/' . $fileName;
        };


        $post->title = $data['title'];
        $post->author = $data['author'];
        $post->category_id = $data['category_id'];
        $post->content = $data['content'];
        $post->image = $data['image'] ?? null;
        $post->github_link = $data['github_link'];
        $post->update();
        //dopo l'update
        if ($request->has('tags')) {
            $post->tags()->sync($data['tags']);
        } else {
            $post->tags()->detach();
        }
        return redirect()->route('posts.show', $post->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::findOrFail($id);

        // Elimina l'immagine dal filesystem se esiste
        if ($post->image && file_exists(public_path($post->image))) {
            unlink(public_path($post->image));
        }

        // Elimina le relazioni con i tag
        $post->tags()->detach();

        // Elimina il post
        $post->delete();

        return redirect()->route('posts.index')->with('success', 'Progetto eliminato con successo!');
    }
}
