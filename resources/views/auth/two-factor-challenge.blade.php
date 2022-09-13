<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <div x-data="{ recovery: false }">
            <div  x-show="! recovery">
                {{ __('Please confirm access to your account by entering the authentication code provided by your authenticator application.') }}
            </div>

            <div  x-show="recovery">
                {{ __('Please confirm access to your account by entering one of your emergency recovery codes.') }}
            </div>

            <x-jet-validation-errors  />

            <form method="POST" action="{{ route('two-factor.login') }}">
                @csrf

                <div  x-show="! recovery">
                    <x-jet-label for="code" value="{{ __('Code') }}" />
                    <x-jet-input id="code"  type="text" inputmode="numeric" name="code" autofocus x-ref="code" autocomplete="one-time-code" />
                </div>

                <div  x-show="recovery">
                    <x-jet-label for="recovery_code" value="{{ __('Recovery Code') }}" />
                    <x-jet-input id="recovery_code"  type="text" name="recovery_code" x-ref="recovery_code" autocomplete="one-time-code" />
                </div>

                <div>
                    <button type="button"
                                    x-show="! recovery"
                                    x-on:click="
                                        recovery = true;
                                        $nextTick(() => { $refs.recovery_code.focus() })
                                    ">
                        {{ __('Use a recovery code') }}
                    </button>

                    <button type="button"
                                    x-show="recovery"
                                    x-on:click="
                                        recovery = false;
                                        $nextTick(() => { $refs.code.focus() })
                                    ">
                        {{ __('Use an authentication code') }}
                    </button>

                    <x-jet-button >
                        {{ __('Log in') }}
                    </x-jet-button>
                </div>
            </form>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>