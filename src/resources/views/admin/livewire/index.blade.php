<div>

    <div class="d-flex justify-content-between">
        <div>
        <h2>{{_e('Tidio')}}</h2>
        <p>
            {{_e('Integrate Tidio chat to your website')}}
        </p>
        </div>
    </div>

    <div class="mb-3 mt-4 gap-3">


        <div class="card mt-4">
            <div class="card-body mb-4">
                <div>
                    <small class="live-edit-label"><?php _e("Widget Code"); ?></small>
                    <livewire:microweber-option::textarea optionKey="widget_code" optionGroup="tidio" module="tidio"  />
                </div>
            </div>
        </div>


    </div>

</div>
