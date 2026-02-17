<?php

namespace Database\Seeders;

use App\Models\TeamMember;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    public function run(): void
    {
        $members = [
            [
                'name' => 'James Whitfield',
                'role' => 'Founding Director & Principal Architect',
                'bio' => 'James founded Whitfield & Partners in 2008 after a decade at Foster + Partners. A RIBA Chartered Architect with an MA from the Bartlett, he leads the practice\'s design vision and has overseen every project since inception. His work has been published in Dezeen, Architectural Review, and the Financial Times.',
                'image' => 'https://images.unsplash.com/photo-1560250097-0b93528c311a?w=400&q=80',
                'sort_order' => 1,
            ],
            [
                'name' => 'Sarah Chen',
                'role' => 'Associate Director',
                'bio' => 'Sarah brings 15 years of experience in sustainable design, having led the practice\'s push toward Passivhaus standards. She holds a PhD in environmental building design from Cambridge and oversees all public-sector commissions. Her Beaconsfield Library project was shortlisted for a Civic Trust Award.',
                'image' => 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=400&q=80',
                'sort_order' => 2,
            ],
            [
                'name' => 'Oliver Hartley',
                'role' => 'Senior Architect',
                'bio' => 'Oliver specialises in residential and hospitality projects, bringing an eye for material detailing that sets the practice apart. Before joining Whitfield & Partners, he spent five years at David Chipperfield Architects working on museum and gallery projects across Europe.',
                'image' => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=400&q=80',
                'sort_order' => 3,
            ],
            [
                'name' => 'Priya Sharma',
                'role' => 'Interior Design Lead',
                'bio' => 'Priya heads the interior design studio, bringing a refined sensibility honed at Tom Dixon\'s Design Research Studio. She believes interiors should feel inevitable — as though the space could not exist any other way. Her Marlow Penthouse project was featured in Elle Decoration.',
                'image' => 'https://images.unsplash.com/photo-1580489944761-15a19d654956?w=400&q=80',
                'sort_order' => 4,
            ],
        ];

        foreach ($members as $member) {
            TeamMember::create($member);
        }
    }
}
