<div class="row mt-4 mb-4">
    <div class="col">
         
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.test19s.name'))->class('col-md-2 form-control-label')->for('name') }}
            <div class="col-md-10">
                
                        {{ html()->text('name')
                        ->class('form-control')
                        ->placeholder(__('validation.attributes.backend.test19s.name'))
                        
                        
                      
                            ->required() 
                         }}
                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.test19s.status'))->class('col-md-2 form-control-label')->for('status') }}
            <div class="col-md-10">
                
                    {{ html()->select('status',[   'active'=>'Active',   'inactive'=>'InActive', ])
                    ->class('form-control')
                    ->placeholder(__('validation.attributes.backend.test19s.status'))
                        ->required()
                    }}

                

            </div><!--col-->
        </div><!--form-group-->
         

        <!--end-columns-->
             



    </div><!--col-->
</div><!--row-->