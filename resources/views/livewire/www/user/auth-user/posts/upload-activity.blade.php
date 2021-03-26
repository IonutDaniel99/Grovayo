<div>
    <div class="add-activity">
        <form wire:submit.prevent="activityUpload">
            <div class="activity-group">
                <div class="maine-activity-img">
                    <img src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->profile_photo_url }}">
                </div>
                <textarea class="add-activity-des" placeholder="What is new, {{ Auth::user()->name }}?" wire:model.lazy="activityText" require></textarea>

            </div>
            <div class="activity-button">
                <label for="file" class="image-input-file">
                    <div class="image-input-div">
                        <input type="file" name="activityPhotoName" id="file" style="display: none;" accept="image/*" wire:model.lazy="activityPhoto" />
                        <i class="fas fa-camera"></i>
                        <span>Add Photo</span>
                    </div>
                </label>
                <div style="display: flex;align-items: center;justify-content: flex-end;">
                    @error('activityText')
                    <div class="categories-left-heading" x-data="{tooltip_activity_error:false}" style="text-align: left;padding: 0px 20px 0px 20px; width:0%">
                        <div @mouseenter="tooltip_activity_error = true" @mouseleave="tooltip_activity_error = false">
                            <i class="fas fa-remove-format info-button pt-1  pulsate-fwd" style="padding:0px !important"></i>
                        </div>
                        <div class="relative" x-cloak x-show.transition.origin.top="tooltip_activity_error" style="display:block !important">
                            <div class="text-center absolute z-10 w300px p-2 -mt-1 text-sm leading-tight text-white transform -translate-x-40 -translate-y-12 bg-orange-500 rounded-lg shadow-lg">
                                {{ $message }}
                            </div>
                        </div>
                    </div>
                    @enderror
                    @error('activityPhoto')
                    <div class="categories-left-heading" x-data="{tooltip_activity_error:false}" style="text-align: left;padding: 0px 20px 0px 20px; width:0%">
                        <div @mouseenter="tooltip_activity_error = true" @mouseleave="tooltip_activity_error = false">
                            <i class="fas fa-image info-button pt-1  pulsate-fwd" style="padding:0px !important"></i>
                        </div>
                        <div class="relative" x-cloak x-show.transition.origin.top="tooltip_activity_error" style="display:block !important">
                            <div class="text-center absolute z-10 w300px p-2 -mt-1 text-sm leading-tight text-white transform -translate-x-40 -translate-y-12 bg-orange-500 rounded-lg shadow-lg">
                                {{ $message }}
                            </div>
                        </div>
                    </div>
                    @enderror
                    <button class="act-btn-post" type="submit">Upload Activity</button>
                </div>
            </div>
        </form>
    </div>
</div>