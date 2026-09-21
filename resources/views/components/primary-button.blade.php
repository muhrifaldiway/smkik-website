<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-[var(--gold)] border border-transparent rounded-md font-semibold text-xs text-[var(--forest-deep)] uppercase tracking-widest hover:bg-[var(--gold-deep)] focus:outline-none focus:ring-2 focus:ring-[var(--forest)] focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
