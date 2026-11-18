@if (@auth::guard('member')->user()->username)
    <div class="card">
        <div class="card-header">
            <h5 class="m-0">Client</h5>
        </div>
        <div class="card-body">

            <p class="card-text">

            <div class="form-group">
                <label class="col-6 input-group-text" for="PicDescription">Massge box (you can Sent to Admin here)
                </label>
                <textarea type="textarea" id="compose-textarea" class="col-6 form-control" wire:model="massage" cols="30"
                    rows="10"> </textarea>
            </div>


            {{-- <input type="hidden" wire:model="recevier_id"> --}}

            <button type='submit' class="btn btn-primary" wire:click='orderAdd'> submit
            </button>



            </ul>


            </p>
        </div>
    </div>
@else
    <div class="card">
        <div class="card-header">
        </div>
        <div class="card-body">

            <p class="card-text">

                {{-- <div class="form-group" wire:ignore>

                <textarea type="textarea" input="description" wire:model.lazy="Amassage" cols="30" rows="10"></textarea>


            </div> --}}

            <div class="form-group">
                <label class="col-6 input-group-text" for="PicDescription">Massge box (you can Sent to client here)
                </label>
                <textarea type="textarea" input="description" class="col-6 form-control" wire:model.lazy="Amassage" cols="20"
                    rows="5"></textarea>
            </div>


            <input type="hidden" wire:model="member_id" value="<?php echo @$_POST['member_id']; ?>">

            <button type='submit' class="btn btn-primary" wire:click='ReorderAdd'> submit </button>

            </ul>


            </p>
        </div>
    </div>
@endif
