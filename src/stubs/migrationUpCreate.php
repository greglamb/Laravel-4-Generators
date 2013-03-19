	public function up()
	{
		{{pgschema}}
		Schema::create('{{tableName}}', function($table) {
			$table->increments('id');
			{{methods}}
			$table->timestamps();
		});
	}