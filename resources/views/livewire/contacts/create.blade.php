
<h4 class="mt-5">Add new Contact</h4>
<div class="form-group">
    <label for="">Name</label>
    <input wire:model="name" type="text" class="form-control">
</div>
<div class="form-group">
    <label for="">Phone</label>
    <input wire:model="phone" type="text" class="form-control">
</div>
<div class="form-group">
  <label for="">Address</label>
  <input wire:model="address" type="text" class="form-control">
</div>
<div class="form-group">
  <div class="btn btn-primary mb-5" wire:click="store()">
    <span class="fa fa-plus"></span>
    ADD
  </div>
</div>