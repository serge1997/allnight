<?php
namespace App\Core\ImageEstablishment;

use App\Models\ImageEstablishment;
use Illuminate\Support\Facades\Auth;

class ImageEstablishmentRepository implements ImageEstablishmentRepositoryInterface
{
    public function create($request)
    {

        if ($request->hasFile("establishment-images")) {

            foreach($request->file('establishment-images') as $image){
                $establishmentImage = new ImageEstablishment();
                $image = $image;
                $extension = $image->extension();
                $imageName = md5($image->getClientOriginalName(). strtotime('now')). "." . $extension;
                $image->move(public_path('img/establishments'), $imageName);
                $establishmentImage->image = $imageName;
                $establishmentImage->establishment_id = 5; //Auth::user()->id;
                $establishmentImage->save();
            }
        }



    }
}
