<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class ReservationRequest extends FormRequest
{
    public function authorize(): bool { return true; }
    public function rules(): array
    {
        return [
            'outlet_id' => ['required', 'exists:outlets,id'],
            'name' => ['required', 'string', 'max:80'],
            'phone' => ['required', 'regex:/^[0-9+\-\s]{8,16}$/'],
            'email' => ['required', 'email'],
            'date' => ['required', 'date', 'after_or_equal:today'],
            'time' => ['required', 'date_format:H:i', 'after_or_equal:10:00', 'before_or_equal:21:00'],
            'guests' => ['required', 'integer', 'between:1,20'],
            'notes' => ['nullable', 'string', 'max:500'],
        ];
    }
    public function messages(): array { return ['time.after_or_equal' => 'We open at 10:00.', 'time.before_or_equal' => 'Last seating is 21:00.', 'phone.regex' => 'Enter a valid phone number.']; }
}
