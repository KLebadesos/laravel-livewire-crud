<div>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <strong>Sorry!</strong> invalid input.<br><br>
            <ul style="list-style-type:none;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if($updateForm) <!-- if edit() functions was triggered it will execute updateMode = true -->
        @include('livewire.contacts.update')
    @else <!-- public variable updateMode = false as default value-->
        @include('livewire.contacts.create')
    @endif

    <table class="table table-striped">
        <tr>
          <td>ID</td>
          <td>NAME</td>
          <td>PHONE</td>
          <td>ADDRESS</td>
          <td>ACTION</td>
        </tr>
        @foreach($data as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->phone}}</td>
                <td>{{$item->address}}</td>
                <td width="200px">
                    <button wire:click="edit({{$item->id}})" class="btn btn-info btn-sm"><span class="fa fa-pencil-square-o mr-2"></span>Edit</button>
                    <button wire:click="destroy({{$item->id}})" class="btn btn-danger btn-sm"><span class="fa fa-trash mr-2"></span>Delete</button>
                </td>
            </tr>
        @endforeach
    </table>
</div> 