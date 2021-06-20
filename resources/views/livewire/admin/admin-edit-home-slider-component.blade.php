<div>
    <div class="container" style="padding:30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Actualizar Slider
                            </div>
                            <div class="col-md-6">
                               <a href="{{route('admin.homeslider')}}" class="btn btn-success pull-right"> Todas los Sliders</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if (session('message'))
                            <div class="alert alert-success"><strong>{{session('message')}}</strong></div>
                        @endif

                        <form class="form-horizontal" wire:submit.prevent='update' enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="col-md-4 control-label">Título</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Título" class="form-control input-md" wire:model='title'   />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Subtítulo</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Subtítulo" class="form-control input-md" wire:model='subtitle'  />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Precio</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="precio" class="form-control input-md" wire:model='price'  />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Link</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Link" class="form-control input-md" wire:model='link'  />
                                </div>
                            </div>
                           
                            <div class="form-group">
                                <label class="col-md-4 control-label">Imagen</label>
                                <div class="col-md-4">
                                    <input type="file"  class="input-file" wire:model='image'  />
                                    @if ($image != $slider->image)
                                        <img src="{{$image->temporaryUrl()}}" width="120" />
                                    @else
                                        <img src="{{asset('assets/images/sliders/'.$slider->image )}}" width="120" />
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Estatus</label>
                                <div class="col-md-4">
                                    <select class="form-control input-md" wire:model='status'  >
                                        <option value="0">Inactivo</option>
                                        <option value="1">Activo</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label"></label>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary" >Actualizar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
