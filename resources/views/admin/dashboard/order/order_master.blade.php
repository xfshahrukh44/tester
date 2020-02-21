<div class="row">                        
                          <div class="col-md-4">
                              <div class="form-group">
                                {{ Form::label('user_id', 'User ID') }}
                                {{ Form::text('user_id', null, ['class'=>'form-control', 'placeholder'=>'Enter User ID']) }}
                              </div>
                          </div>

                          <div class="col-md-4">
                              <div class="form-group">
                                {{ Form::label('title', 'Title') }}
                                {{ Form::text('title', null, ['class'=>'form-control', 'placeholder'=>'Enter Order Title']) }}
                              </div>
                          </div>

                          <div class="col-md-4">
                              <div class="form-group">
                                {{Form::label('status','Status')}}
                                {{Form::select('status',['pending' => 'pending', 'draft' => 'draft', 'completed' => 'completed'],'pending',['class' => 'form-control','id' => 'status'])}}
                              </div>
                          </div>

                          <div class="col-md-4">
                              <div class="form-group">
                                {{ Form::label('payment', 'Payment') }}
                                {{ Form::text('payment', null, ['class'=>'form-control', 'placeholder'=>'Enter Payment']) }}
                              </div>
                          </div>

                          <div class="col-md-4">
                              <div class="form-group">
                                {{ Form::label('discount', 'Discount') }}
                                {{ Form::text('discount', null, ['class'=>'form-control', 'placeholder'=>'Enter Discount']) }}
                              </div>
                          </div>

                          <div class="col-md-4">
                              <div class="form-group">
                                {{Form::label('discount_unit','Discount Unit')}}
                                {{Form::select('discount_unit',['percentage' => 'percentage', 'amount' => 'amount'],'percentage',['class' => 'form-control','id' => 'discount_unit'])}}
                              </div>
                          </div>

                          <div class="col-md-12">
                              {{Form::button(isset($model)? 'Update' : 'Save', ['class' => 'btn btn-primary','type' => 'submit'])}}
                          </div>   
                      </div>