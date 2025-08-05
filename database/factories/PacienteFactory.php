<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Paciente>
 */
class PacienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'nombres' => $this->faker->firstName(),
            'apellidos' => $this->faker->lastName(),
            'dni' => $this->faker->unique()->numerify('##########'),
            'nro_seguro_cuil' => $this->faker->unique()->numerify('20##########'),
            'fecha_nacimiento' => $this->faker->date(format: 'Y-m-d', max: 'now'),
            'genero' => $this->faker->randomElement(['Masculino', 'Femenino', 'Otro']),
            'celular' => $this->faker->unique()->phoneNumber(),
            'email' => $this->faker->unique()->safeEmail(),
            'direccion' => $this->faker->address(),
            'grupo_sanguineo' => $this->faker->randomElement(['A+', 'A-', 'B+', 'B-', 'AB+', 'AB-', 'O+', 'O-']),
            'enfermedades_preexistentes' => $this->faker->sentence(),
            'medicacion_actual' => $this->faker->sentence(),
            'alergias' => $this->faker->sentence(),
            'contacto_emergencia' => $this->faker->phoneNumber(),
            'observaciones' => $this->faker->sentence(),
        ];
    }
}
