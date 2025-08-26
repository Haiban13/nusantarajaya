<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArtikelResource\Pages;
use App\Filament\Resources\ArtikelResource\RelationManagers;
use App\Models\Artikel;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ArtikelResource extends Resource
{
    protected static ?string $model = Artikel::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('judul')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('tanggal_mulai')
                    ->required(),
                Forms\Components\DatePicker::make('tanggal_akhir')
                    ->required(),
             
                Forms\Components\Hidden::make('img'),
                Forms\Components\Hidden::make('owner'),
                Forms\Components\FileUpload::make('upload_img1')
                    ->label('Image 1')
                    ->image()
                    ->directory('images')
                    ->maxSize(2048)
                    ->nullable()->preserveFilenames(false)
                        ->visibility('public')->multiple(false),

                Forms\Components\FileUpload::make('upload_img2')
                    ->label('Image 2')
                    ->image()
                    ->directory('images')
                    ->maxSize(2048)
                    ->nullable()->preserveFilenames(false)
->visibility('public')->multiple(false),

                Forms\Components\FileUpload::make('upload_img3')
                    ->label('Image 3')
                    ->image()
                    ->directory('images')
                    ->maxSize(2048)
                    ->nullable()->preserveFilenames(false)
->visibility('public')->multiple(false),

                Forms\Components\FileUpload::make('upload_video')
                    ->label('Video')
                    ->directory('videos')
                    ->acceptedFileTypes(['video/mp4', 'video/mpeg', 'video/quicktime'])
                    ->maxSize(10240) // 10MB
                    ->nullable()->preserveFilenames(false)
->visibility('public')->multiple(false),

            
                Forms\Components\Textarea::make('des_singkat')
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('detail_acara')
                    ->columnSpanFull(),
            ]);
       
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('judul')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tanggal_mulai')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tanggal_akhir')
                    ->date()
                    ->sortable(),
                Tables\Columns\ImageColumn::make('images.img1')
                    ->label('Image 1')
                    ->square(),

                Tables\Columns\ImageColumn::make('images.img2')
                    ->label('Image 2')
                    ->square(),

                Tables\Columns\ImageColumn::make('images.img3')
                    ->label('Image 3')
                    ->square(),

                // Show video as a clickable link
                Tables\Columns\TextColumn::make('images.video')
                    ->label('Video')
                    ->url(fn ($record) => $record->images?->video ? asset('storage/' . $record->images->video) : null)
                    ->openUrlInNewTab(),
  
           
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListArtikels::route('/'),
            'create' => Pages\CreateArtikel::route('/create'),
            'edit' => Pages\EditArtikel::route('/{record}/edit'),
        ];
    }
}
