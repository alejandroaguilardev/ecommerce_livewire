<div>
    <div class="container" style="padding:30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Agregar Nueva Categoria
                            </div>
                            <div class="col-md-6">
                               <a href="{{route('admin.categories')}}" class="btn btn-success pull-right"> Todas las categorías</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if (session('message'))
                            <div class="alert alert-success"><strong>{{session('message')}}</strong></div>
                        @endif
                        <form class="form-horizontal" wire:submit.prevent='storeCategory'>
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
