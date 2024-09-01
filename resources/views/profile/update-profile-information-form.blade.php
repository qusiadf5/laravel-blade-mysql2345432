<x-form-section submit="updateProfileInformation">
    <x-slot name="title">
        {{ __('معلومات الحساب') }}
    </x-slot>

    <x-slot name="description">
        {{ __('قم بتحديث معلومات الحساب والبريد الإلكتروني الخاص بك.') }}
    </x-slot>

    <x-slot name="form">
        <!-- Profile Photo -->
        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
        <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 sm:col-span-4" style="display: none;">
            <!-- Profile Photo File Input -->
            <input type="file" id="photo" class="hidden" wire:model.live="photo" x-ref="photo" x-on:change="
                photoName = $refs.photo.files[0].name;
                const reader = new FileReader();
                reader.onload = (e) => {
                    photoPreview = e.target.result;
                };
                reader.readAsDataURL($refs.photo.files[0]);
            ">
        
            <label class="block font-medium text-sm text-gray-700" for="photo">
                الصورة
            </label>
        
            <!-- Current Profile Photo -->
            <div class="mt-2" x-show="! photoPreview">
                <img src="../assets/img/logo.png" alt="Athar?" class="rounded-full h-20 w-20 object-cover">
            </div>
        
            <!-- New Profile Photo Preview -->
            <div class="mt-2" x-show="photoPreview" style="display: none;">
                <span class="block rounded-full w-20 h-20 bg-cover bg-no-repeat bg-center" x-bind:style="'background-image: url(\'' + photoPreview + '\');'" style="background-image: url('null');">
                </span>
            </div>
        
            <button type="button" class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150 mt-2 me-2" x-on:click.prevent="$refs.photo.click()">
                اختر صورة جديدة
            </button>
        
            <button type="button" class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150 mt-2" wire:click="deleteProfilePhoto">
                حذف الصورة
            </button>
        </div>
        
        @endif

        <!-- Name -->
        <div class="col-span-6 sm:col-span-4">
            <x-label for="name" value="{{ __('الاسم') }}" />
            <x-input id="name" type="text" class="mt-1 block w-full" wire:model="state.name" required autocomplete="name" style="border-color: #ffc414;" />
            <x-input-error for="name" class="mt-2" />
        </div>

        <!-- Email -->
        <div class="col-span-6 sm:col-span-4">
            <x-label for="email" value="{{ __('البريد الإلكتروني') }}" />
            <x-input id="email" type="email" class="mt-1 block w-full" wire:model="state.email" required autocomplete="username" style="border-color: #ffc414;" />
            <x-input-error for="email" class="mt-2" />

            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::emailVerification()) && ! $this->user->hasVerifiedEmail())
                <p class="text-sm mt-2" style="color: #ffc414;">
                    {{ __('بريدك الإلكتروني غير مؤكد.') }}

                    <button type="button" class="underline text-sm" style="color: #ffc414;" wire:click.prevent="sendEmailVerification">
                        {{ __('اضغط هنا لإعادة إرسال بريد التأكيد.') }}
                    </button>
                </p>

                @if ($this->verificationLinkSent)
                    <p class="mt-2 font-medium text-sm text-green-600">
                        {{ __('تم إرسال رابط تأكيد جديد إلى بريدك الإلكتروني.') }}
                    </p>
                @endif
            @endif
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-action-message class="me-3" on="saved" style="color: #ffc414;">
            {{ __('تم الحفظ.') }}
        </x-action-message>

        <x-button wire:loading.attr="disabled" wire:target="photo" style="background-color: #ffc414;">
            {{ __('حفظ') }}
        </x-button>
    </x-slot>
</x-form-section>
