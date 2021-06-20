<div>
    <div class="container" style="padding:30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Agregar Nuevo Producto
                            </div>
                            <div class="col-md-6">
                               <a href="{{route('admin.products')}}" class="btn btn-success pull-right"> Todas los Productos</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if (session('message'))
                            <div class="alert alert-success"><strong>{{session('message')}}</strong></div>
                        @endif

                        <form class="form-horizontal" wire:submit.prevent='store' enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="col-md-4 control-label">Nombre</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Nombre" class="form-control input-md" wire:model='name' wire:keyup='generateSlug'  />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Slug</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Slug" class="form-control input-md" wire:model='slug' readonly />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Categoría</label>
                                <div class="col-md-4">
                                    <select class="form-control input-md" wire:model='category_id'  >
                                        @foreach ($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Descripción Corta</label>
                                <div class="col-md-4">
                                    <textarea type="text" placeholder="Descripción Corta" class="form-control input-md" wire:model='short_description'> </textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Descripción</label>
                                <div class="col-md-4">
                                    <textarea type="text" placeholder="Descripción" class="form-control input-md" wire:model='description'> </textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Precio Normal</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="0" class="form-control input-md" wire:model='regular_price'   />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Precio Oferta</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Precio Oferta" class="form-control input-md" wire:model='sale_price'  />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">SKU</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="SKU" class="form-control input-md" wire:model='sku'   />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Stock</label>
                                <div class="col-md-4">
                                    <select class="form-control input-md" wire:model='stock_status'  >
                                        <option value="instock">En stock</option>
                                        <option value="outstock">Sin stock</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Destacado</label>
                                <div class="col-md-4">
                                    <select class="form-control input-md" wire:model='featured'  >
                                        <option value="0">No</option>
                                        <option value="1">Si</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Cantidad</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Cantidad" class="form-control input-md" wire:model='quantity'   />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Imagen</label>
                                <div class="col-md-4">
                                    <input type="file"  class="input-file" wire:model='image'  />
                                    @if ($image)
                                        <img src="{{$image->temporaryUrl()}}" width="120" />
                                    @endif
                                </div>
                            </div>



                            <div class="form-group">
                                <label class="col-md-4 control-label"></label>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary" >Guardar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
