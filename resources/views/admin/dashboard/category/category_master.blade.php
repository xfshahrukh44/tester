<div class="row">                        
                          <div class="col-md-4">
                              <div class="form-group">
                                {{ Form::label('title', 'Category Title') }}
                                <div class="form-group {{$errors->has('title') ? 'has-error' : ''}} "></div>
                                {{ Form::text('title', null, ['class'=>'form-control','id' => 'title','placeholder'=>'Enter Category Name']) }}
                              </div>
                          </div>

                          <div class="col-md-4">
                              <div class="form-group">
                                {{ Form::label('parent', 'Parent') }}
                                <div class="form-group {{$errors->has('parent') ? 'has-error' : ''}} "></div>
                                {{ Form::text('parent', null,['class'=>'form-control', 'id' => 'parent','placeholder'=>'Enter Category Parent']) }}
                              </div>
                          </div>

                          <div class="col-md-12">
                              {{Form::button(isset($model)? 'Update' : 'Save', ['class' => 'btn btn-primary','type' => 'submit'])}}
                          </div>   
                      </div>