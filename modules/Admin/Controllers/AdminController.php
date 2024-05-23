<?php

namespace Modules\Admin\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Database\Connection;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Schema;

class AdminController extends Controller
{
    public function index()
    {

        // Get the grammar for the current connection
        $connection = Schema::getConnection();
        $grammar = $connection->getSchemaGrammar();

        // Create a Blueprint instance for the 'example_table'
        $blueprint = new Blueprint('example_table');

        // Define the schema directly on the Blueprint instance
        $blueprint->id();
        $blueprint->string('title');
        $blueprint->text('body');
        $blueprint->unsignedBigInteger('user_id');
        $blueprint->timestamps();
        $blueprint->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

        // Generate the SQL statements
        $statements = $blueprint->toSql($connection, $grammar);

        // Return the SQL statements as JSON
        return response()->json($statements);
    }

    public function create()
    {
        return view('admin::main.index');
    }

    public function checkModules()
    {
        $modulesPath = base_path('modules');

        if (!File::isDirectory($modulesPath)) {
            return response()->json([
                'error' => 'The modules directory does not exist.'
            ], 404);
        }

        $modules = File::directories($modulesPath);

        $moduleFolders = array_map(function ($module) use ($modulesPath) {
            return basename($module);
        }, $modules);

        return response()->json([
            'modules' => $moduleFolders
        ]);
    }
}
