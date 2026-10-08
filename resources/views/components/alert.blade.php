@props(['type' => 'success', 'message' => ''])

<div style="padding: 14px 18px; margin-bottom: 18px; border-radius: 6px; border-left: 6px solid {{ $type === 'error' ? 'red' : 'green' }}; background: {{ $type === 'error' ? '#fdecea' : '#e8f6ec' }};">
    <strong>{{ ucfirst($type) }}:</strong> {{ $message }}
</div>
