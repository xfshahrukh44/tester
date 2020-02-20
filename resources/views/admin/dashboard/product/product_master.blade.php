                    <div class="row">
                        <div class="col-md-4">
                              <div class="form-group">
                                {{Form::label('category_id','Category')}}
                                <div class="form-group {{$errors->has('category_id') ? 'has-error' : ''}} "></div>
                                {{Form::text('category_id', null,['class'=>'form-control','id'=>'category_id','placeholder'=>'Enter Category ID'])}}
                                <!-- {{$errors->first('category_id','<p class="help-block">:message</p>')}} -->
                                    
                              </div>
                          </div>    
                          <div class="col-md-4">
                              <div class="form-group">
                                {{Form::label('title','Product Name')}}
                                <div class="form-group {{$errors->has('body') ? 'has-error' : ''}} "></div>
                                  {{Form::text('title', null,['class' => 'form-control','id' => 'title','placeholder' => 'Enter Product'])}}
                                  <!-- {{$errors->first('title','<p class="help-block">:message</p>')}} -->
                                
                              </div>
                          </div>

                          <!-- short and long description textarea. -->
                          <div class="col-md-4">
                              <div class="form-group">
                                {{Form::label('short_desc','Short Description')}}
                                <div class="form-group {{$errors->has('body') ? 'has-error' : ''}} "></div>
                                {{Form::text('short_desc', null,['class' => 'form-control','id' => 'short_desc','placeholder' => 'Enter Product Short Description'])}}
                                <!-- {{$errors->first('short_desc','<p class="help-block">:message</p>')}} -->
                              </div>
                          </div>
                          <div class="col-md-12">
                              <div class="form-group">
                                
                                {{Form::label('long_desc','Long Description')}}
                                <div class="form-group {{$errors->has('body') ? 'has-error' : ''}} "></div>
                                {{Form::textarea('long_desc', null, ['class' => 'form-control','id' => 'long_desc','placeholder' => 'Enter Product Full Description'])}}
                                <!-- {{$errors->first('long_desc','<p class="help-block">:message</p>')}} -->
                            </div>
                          </div>

                          <div class="col-md-4">
                              <div class="form-group">

                              {{Form::label('unit','Unit')}}

                              <div class="form-group {{$errors->has('body') ? 'has-error' : ''}} "></div>
                              {{Form::select('unit',['kg' => 'kg', 'litre' => 'litre'],'kg', ['class' => 'form-control','id' => 'unit'])}}
                              <!-- {{$errors->first('unit','<p class="help-block">:message</p>')}} -->

                              </div>
                          </div>
                          <div class="col-md-4">
                              <div class="form-group">
                                {{Form::label('price','Price in Rs.')}}

                                <div class="form-group {{$errors->has('body') ? 'has-error' : ''}} "></div>
                                {{Form::text('price', null,['class' => 'form-control','id' => 'price', 'placeholder' => 'Enter Price in Rs.'])}}
                                <!-- {{$errors->first('price','<p class="help-block">:message</p>')}} -->

                              </div>
                          </div>
                          <div class="col-md-4">
                              <div class="form-group">
                                {{Form::label('cost','Cost in Rs.')}}
                                <div class="form-group {{$errors->has('body') ? 'has-error' : ''}} "></div>
                                {{Form::text('cost', null,['class' => 'form-control','id' => 'cost', 'placeholder' => 'Enter Cost in Rs.'])}}
                                <!-- {{$errors->first('cost','<p class="help-block">:message</p>')}} -->
                              </div>
                          </div>
                          <div class="col-md-4">
                              <div class="form-group">
                                {{Form::label('discount','Discount %')}}
                                <div class="form-group {{$errors->has('body') ? 'has-error' : ''}} "></div>
                                {{Form::text('discount', null,['class' => 'form-control','id' => 'discount', 'placeholder' => 'Enter Discount %'])}}    
                                <!-- {{$errors->first('discount','<p class="help-block">:message</p>')}} -->

                              </div>
                          </div>
                          <div class="col-md-4">
                              <div class="form-group">

                                {{Form::label('status','Status')}}
                                <div class="form-group {{$errors->has('body') ? 'has-error' : ''}} "></div>
                                {{Form::select('status',['pending' => 'pending', 'draft' => 'draft', 'completed' => 'completed'],'pending',['class' => 'form-control','id' => 'status'])}}    
                                <!-- {{$errors->first('status','<p class="help-block">:message</p>')}} -->

                              </div>
                          </div>
                          <div class="col-md-4">
                              <div class="form-group">
                                {{Form::label('created_by','Created By')}}
                                <div class="form-group {{$errors->has('body') ? 'has-error' : ''}} "></div>
                                {{Form::text('created_by', null,['class' => 'form-control','id' => 'created_by', 'placeholder' => 'Created By'])}}
                                <!-- {{$errors->first('created_by','<p class="help-block">:message</p>')}} -->

                              </div>
                          </div>

                          <div class="col-md-4">
                              <div class="form-group">
                                {{Form::label('modified_by','Modified By')}}
                                <div class="form-group {{$errors->has('body') ? 'has-error' : ''}} "></div>
                                {{Form::text('modified_by', null,['class' => 'form-control','id' => 'modified_by', 'placeholder' => 'Modified By'])}}
                                <!-- {{$errors->first('modified_by','<p class="help-block">:message</p>')}} -->
                              </div>
                          </div>

                          <div class="col-md-4">
                              <div class="form-group">
                                {{Form::label('threshold','Threshold')}}
                                <div class="form-group {{$errors->has('threshold') ? 'has-error' : ''}} "></div>
                                {{Form::text('threshold', null,['class'=>'form-control','id'=>'threshold','placeholder'=>'Enter Threshold'])}}
                                <!-- {{$errors->first('threshold','<p class="help-block">:message</p>')}} -->

                              </div>
                          </div>
                          
                          <div class="col-md-12">
                            {{Form::button(isset($model)? 'Update' : 'Save', ['class' => 'btn btn-primary','type' => 'submit'])}}
                          </div>   
                      </div>