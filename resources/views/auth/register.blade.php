<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors  />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name"  type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div >
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email"  type="email" name="email" :value="old('email')" required />
            </div>

            <div >
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password"  type="password" name="password" required autocomplete="new-password" />
            </div>

            <div >
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation"  type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div >
                    <x-jet-label for="terms">
                        <div>
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div >
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'. route('terms.show') . __('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'. route('policy.show') . __('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div>
                <a href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button>
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
