<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller {

    public function update_specific_article(Request $request) { 

        if ($request->hasFile('new_photo')) {
            $file = $request->file('new_photo');
            $destinationPath = public_path('images/blog-images');
            $file->move($destinationPath, $file->getClientOriginalName());
            $img_link = $file->getClientOriginalName();
        } else {
            $img_link = null;
        }
    
        $id = $request->idUpdate;
        $header = $request->inside_header;
        $subHeader = $request->inside_subHeader;
        $content = $request->content_inside;
    
        $data = [
            'header' => $header,
            'subHeader' => $subHeader, 
            'content' => $content
        ];
    
        if ($img_link !== null) {
            $data['img_link'] = $img_link;
        }
    
        DB::table('blogs')
            ->where('id', $id)
            ->update($data);
    
        return redirect()->route('getSpecificArticle', ['id' => $id])->with('status', "Статията беше променена успешно");
    }

    public function get_specific_article ($dataID) { 

        if (Auth::user()->acces_type === "user") {
            return redirect()->route('dashboard');
        } else { 
            $specificArticle = DB::table('blogs')
            ->where('id', $dataID)
            ->get();
    
            return view('profile.files.article', ['specificArticle' => $specificArticle]);
        }
    }

    public function delete_article (Request $request) { 

        $id = $request->hiddenID;

        DB::table('blogs')
        ->where('id', $id)
        ->delete();
        

        return redirect()->route('insert_article')->with('status', "Статията беше изтрита успешно");


    }
   

    public function insert_article(Request $request) {

        $validatedData = $request->validate([
            'article_link' => 'unique:blogs,link',
        ], [
            'article_link.unique' => 'Този линк вече съществува',
        ]);
    
        $file = $request->file('photo_link');
        $destinationPath = public_path('images/blog-images');
        $fileName = $file->getClientOriginalName();
        $file->move($destinationPath, $fileName);
    
        DB::table('blogs')->insert([
            'link' => $request->article_link,
            'img_link' => $fileName,
            'header' => $request->article_header,
            'subHeader' => $request->article_subheader,
            'content' => $request->article_content
        ]);
    
        return redirect()->route('insert_article')->with('status', "Статия беше качена успешно");
    }

    public function all_articles () { 

        $articles = DB::table('blogs')
        ->orderBy('id', 'desc')
        ->get();
        
        return view('profile.files.blog', ['articles' => $articles ] );
    }


}
