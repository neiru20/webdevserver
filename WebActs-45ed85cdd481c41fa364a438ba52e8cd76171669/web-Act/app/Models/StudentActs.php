<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class StudentActs extends Model
{
    //
    use Notifiable;
    protected $table = 'studs'; 
    public $timestamps = true;
    protected $fillable = ['name', 'email', 'age'];

    public function archiveAndDelete($id)
{
    $student = StudentActs::findOrFail($id);

    // Archive the data
    StudentActs::create([
        'name' => $student->name,
        'email' => $student->email,
        'age' => $student->age,
    ]);

    // Delete the original
    $student->delete();

    return redirect()->back()->with('message', 'Student archived and deleted.');
}
}
