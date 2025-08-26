<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LaporkanResource\Pages;
use App\Filament\Resources\LaporkanResource\RelationManagers;
use App\Models\Laporkan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LaporkanResource extends Resource
{
    protected static ?string $model = Laporkan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                 Forms\Components\Select::make('acara_id')
    ->label('acara')
    ->relationship('acara', 'judul') // 'nama' = column in kategoris table
    ->searchable()
    ->preload()
    ->required(),
              
                    Forms\Components\Hidden::make('dokumentasi'),
                Forms\Components\FileUpload::make('upload_img1')
                    ->label('Image 1')
                    ->image()
                    ->directory('dokumentasi/images')
                    ->maxSize(2048)
                    ->nullable()->preserveFilenames(false)
                        ->visibility('public')->multiple(false),

                Forms\Components\FileUpload::make('upload_img2')
                    ->label('Image 2')
                    ->image()
                    ->directory('dokumentasi/images')
                    ->maxSize(2048)
                    ->nullable()->preserveFilenames(false)
                    ->visibility('public')->multiple(false),

                Forms\Components\FileUpload::make('upload_img3')
                    ->label('Image 3')
                    ->image()
                    ->directory('dokumentasi/images')
                    ->maxSize(2048)
                    ->nullable()->preserveFilenames(false)
                    ->visibility('public')->multiple(false),

                Forms\Components\FileUpload::make('upload_video')
                    ->label('Video')
                    ->directory('dokumentasi/videos')
                    ->acceptedFileTypes(['video/mp4', 'video/mpeg', 'video/quicktime'])
                    ->maxSize(10240) // 10MB
                    ->nullable()->preserveFilenames(false)
                    ->visibility('public')->multiple(false),
                Forms\Components\hidden::make('user_acara_id')
                   ,
                Forms\Components\hidden::make('user_pelapor_id')
                     ,
                Forms\Components\Textarea::make('keterangan')
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('jenis_keluhan')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('acara.judul')
                    ->label('Acara')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('jenis_keluhan')
                    ->label('Jenis Keluhan')
                    ->searchable(),

                Tables\Columns\TextColumn::make('keterangan')
                    ->label('Keterangan')
                    ->limit(50)
                    ->toggleable(),
                Tables\Columns\ImageColumn::make('dokumentasi_id.img1')
                    ->label('Image 1') 
                    ->square(),

                Tables\Columns\ImageColumn::make('dokumentasi_id.img2')
                    ->label('Image 2')
                    ->square(),

                Tables\Columns\ImageColumn::make('dokumentasi_id.img3')
                    ->label('Image 3')
                    ->square(),
     
                // Show video as a clickable link
                Tables\Columns\TextColumn::make('dokumentasi_id.video')
                    ->label('Video')
                    ->url(fn ($record) => $record->images?->video ? asset('storage/' . $record->images->video) : null)
                    ->openUrlInNewTab(),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Dilaporkan Pada')
                    ->dateTime()
                    ->sortable(),
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
            'index' => Pages\ListLaporkans::route('/'),
            'create' => Pages\CreateLaporkan::route('/create'),
            'edit' => Pages\EditLaporkan::route('/{record}/edit'),
        ];
    }
}
