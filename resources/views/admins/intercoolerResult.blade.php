		
		<div class="table-responsive">
			<table class="table table-hover table-bordered">
				<thead>
					<tr>
						<th>Category</th>
						<th>Option</th>
						
					</tr>
				</thead>
				<tbody id="result">	
					@if(!empty($cats))
			            @foreach($cats as $category)
				            <tr id="cat_table{{$category->id}}">
				            <td>{{$category->name}}</td>
				            <td >
				              <button class="btn btn-info open-modal" value="{{$category->id}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
				              <button class="btn btn-danger delete-task delete-modal" value="{{$category->id}}"><i class="fa fa-trash" aria-hidden="true"></i> </button>
				            </td>
				            </tr>
				            
			            @endforeach
        			  @endif
         	
				</tbody>
			</table>
		</div>