<?php
namespace App\Core\ImageEstablishment;

use App\Models\ImageEstablishment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
                $establishmentImage->establishment_id = 7; //Auth::user()->id;
                $establishmentImage->save();
            }
        }
    }

    public function listAll()
    {
        $collection_name = [];
        $collection_image = [];
        $data = ImageEstablishment::select(
            DB::raw('GROUP_CONCAT(establishments_images.image) as image'),
            'establishments.name'
        )
            ->join('establishments', 'establishments.id', '=', 'establishments_images.establishment_id')
                ->groupBy('establishments.name')
                    ->get();

        foreach($data as $dt) {
            $collection_name[] = $dt->name;
            $collection_image[] = $dt->image;
        }

        return [$collection_name, $collection_image];
    }
}
