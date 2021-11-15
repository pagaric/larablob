<?php

namespace App\Http\Controllers;

use App\Models\Blob;
use Illuminate\Http\Request;

class BlobController extends Controller
{
    public function accueil()
    {
        return view('blob_form');
    }

    public function storeBlob(Request $req)
    {
        $nom = $_FILES['fic']['name'];
        $blobBrut = file_get_contents($_FILES['fic']['tmp_name']);

        $blob = new Blob();
        $blob->insertBlob($nom, $blobBrut);

        return view('welcome');
    }

    public function affiche()
    {
        $blob = new Blob();
        $data = $blob->getAllBlob();
        return view('affiche', compact('data'));
    }
}
