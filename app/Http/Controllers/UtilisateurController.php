<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;



use App\Services\UtilsService;

use App\Models\Utilisateur;
use App\Models\Article;



class UtilisateurController extends Controller
{
    //
    public function Signin(Request $request) {
        $user = Utilisateur::where('email',$request->input('email'))->where('password',md5($request->input('password')));
        if($user->exists()) {
            session()->put('user',$user->first()->id);
            return redirect()->route("Home");
        }
        else return redirect()->back()->with('Error','Email ou mot de passe incorrect!');
    }

    public function Logout() {
        app('session')->forget('user');
        return view('index');
    }

    public function Signup(Request $request) {
        $data = $request->all();
        if($data['password'] == $data['password_repeat']) {
            $data = array_replace($data,['password' => md5($data['password'])]);
            unset($data['password_repeat']);
            $user = Utilisateur::create($data);
            return redirect()->back()->with('success','Inscription faite!');
        }
        else redirect()->back()->with('Error','Mots de passe différents!');
    }

    public function ForgetPassword(Request $request) {
        $data = $request->all();
        if($data['password'] == $data['password_repeat']) {
            $user = Utilisateur::where('email',$data['email'])->first();
            $user->password = md5($data['password']);
            $user->save();
            return redirect()->back()->with('success','Votre mot de passe a été modifié!');
        }
        else return redirect()->back()->with('Error','Mots de passe différents!');
    }

    public function toHome($limit = 6) {
        $list = Article::join('publication', 'article.id', '=', 'publication.idarticle')
               ->where('publication.etat', '=', 1)
               ->orderBy('publication.publish_at', 'desc')
               ->simplePaginate($limit);
        return view('Home',[
            'liste_article' => $list,
            'links' => $list->links()
        ]);
    }

    public function toSearch() {
        return view('Search',[
            "liste_article" => "",
            "links" => ""
        ]);
    }

    public function Search(Request $request) {
        $article = new Article();
        $article->categorie = $request->input('categorie');
        $article->titre = $request->input('titre');
        $article->contenu = $request->input('texte');
        $article->resume = $request->input('texte');
        $result = UtilsService::Search($article)->join('publication', 'article.id', '=', 'publication.idarticle')
        ->where('publication.etat', '=', 1)
        ->orderBy('publication.publish_at', 'desc')
        ->simplePaginate(6);
        return view('Search',[
            'liste_article' => $result,
            'links' => $result->links()
        ]);
    }

    public function getDetails($slug) {
        $titre = basename($slug,'.html');
        $articles = Article::all();
        foreach($articles as $article) {
            if($article->getSlugtitle() == $titre) {
                return view('Details',[
                    'article' => $article
                ]);
            }
            else abort(404);
        }

    }
}
