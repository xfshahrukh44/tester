<div class="row">                        
                          <div class="col-md-4">
                              <div class="form-group">
                                {{ Form::label('category_title', 'Category Title') }}
                                {{ Form::text('category_title', null, ['class'=>'form-control', 'placeholder'=>'Enter Category Name']) }}
                              </div>
                          </div>

                          <div class="col-md-4">
                              <div class="form-group">
                                {{ Form::label('category_parent', 'Parent') }}
                                {{ Form::text('category_parent', null, ['class'=>'form-control', 'placeholder'=>'Enter Category Parent']) }}
                              </div>
                          </div>

                          <div class="col-md-12">
                              {{Form::submit('Add Category', ['class'=>'btn btn-primary'])}}
                          </div>   
                      </div>