@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'border-[var(--line)] focus:border-[var(--gold-deep)] focus:ring-[var(--gold)] rounded-md shadow-sm']) }}>
