<?php

namespace App\Filament\Resources\ArtikelResource\Pages;

use App\Filament\Resources\ArtikelResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateArtikel extends CreateRecord
{
    protected static string $resource = ArtikelResource::class;
    protected function mutateFormDataBeforeCreate(array $data): array
    {
         $doc = \App\Models\Image::create([
            'img1'  => $data['upload_img1'] ?? null,
            'img2'  => $data['upload_img2'] ?? null,
            'img3'  => $data['upload_img3'] ?? null,
            'video' => $data['upload_video'] ?? null,
            'jenis' => "artikel",

        ]);     

        $data['img'] = $doc->id;

        // Remove temporary upload fields so they aren't saved to Artikel table
        unset($data['upload_img1'], $data['upload_img2'], $data['upload_img3'], $data['upload_video']);

    return $data;
    }
}
