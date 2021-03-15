<div>
    <div class="add-activity">
        <form wire:submit.prevent="activityUpload">
            <div class="activity-group">
                <div class="maine-activity-img">
                    <img src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->profile_photo_url }}">
                </div>
                <textarea class="add-activity-des" placeholder="What is new, John Doe?" wire:model.lazy="activityText"></textarea>
            </div>
            <div class="activity-button">
                <label for="file" class="image-input-file">
                    <div class="image-input-div">
                        <input type="file" name="activityPhotoName" id="file" style="display: none;" accept="image/*" wire:model.lazy="activityPhoto" />
                        <i class="fas fa-camera"></i>
                        <span>Add Photo</span>
                    </div>
                </label>
                <button class="act-btn-post" type="submit">Upload Activity</button>
            </div>
        </form>
    </div>
</div>