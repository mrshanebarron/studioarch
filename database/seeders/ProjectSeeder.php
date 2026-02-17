<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        $projects = [
            [
                'title' => 'The Meridian House',
                'slug' => 'the-meridian-house',
                'category' => 'residential',
                'description' => 'A contemporary family residence that reimagines suburban living through bold geometric forms and floor-to-ceiling glazing. The house is organised around a central courtyard, bringing natural light deep into every room while maintaining privacy from the street. Locally sourced Cotswold stone anchors the structure to the Buckinghamshire landscape, while cantilevered steel sections signal a forward-looking design ethos.',
                'brief' => 'Design a 4-bedroom family home that balances openness with intimacy, using sustainable materials throughout.',
                'location' => 'High Wycombe, Buckinghamshire',
                'year' => '2025',
                'area' => '3,200 sq ft',
                'image' => 'https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?w=1200&q=80',
                'gallery' => [
                    'https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?w=800&q=80',
                    'https://images.unsplash.com/photo-1600566753190-17f0baa2a6c3?w=800&q=80',
                    'https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=800&q=80',
                ],
                'client_name' => 'Private Client',
                'featured' => true,
                'sort_order' => 1,
            ],
            [
                'title' => 'Wycombe Cultural Centre',
                'slug' => 'wycombe-cultural-centre',
                'category' => 'public',
                'description' => 'A community arts venue that transforms a disused Victorian mill into a dynamic cultural hub. The design preserves the original brick facade and timber trusses while inserting a series of contemporary steel-and-glass pavilions that house gallery spaces, a 200-seat theatre, and artist workshops. The project was shortlisted for the RIBA South Award.',
                'brief' => 'Adaptive reuse of a Grade II-listed mill building into a mixed-use cultural facility serving the local community.',
                'location' => 'High Wycombe, Buckinghamshire',
                'year' => '2024',
                'area' => '18,500 sq ft',
                'image' => 'https://images.unsplash.com/photo-1486718448742-163732cd1544?w=1200&q=80',
                'gallery' => [
                    'https://images.unsplash.com/photo-1487958449943-2429e8be8625?w=800&q=80',
                    'https://images.unsplash.com/photo-1545558014-8692077e9b5c?w=800&q=80',
                    'https://images.unsplash.com/photo-1497366811353-6870744d04b2?w=800&q=80',
                ],
                'client_name' => 'Wycombe District Council',
                'featured' => true,
                'sort_order' => 2,
            ],
            [
                'title' => 'Osprey Office Park',
                'slug' => 'osprey-office-park',
                'category' => 'commercial',
                'description' => 'A BREEAM Excellent-rated commercial campus set within 4 acres of landscaped grounds. Three interconnected buildings provide flexible Grade A office space with exposed services, raised access floors, and full-height curtain walling. A central atrium serves as the social spine, connecting all three buildings with cafes, breakout zones, and a rooftop terrace overlooking the Chiltern Hills.',
                'brief' => 'Create a commercial campus that attracts tech tenants through design quality and wellness-led amenities.',
                'location' => 'Marlow, Buckinghamshire',
                'year' => '2024',
                'area' => '45,000 sq ft',
                'image' => 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=1200&q=80',
                'gallery' => [
                    'https://images.unsplash.com/photo-1497366216548-37526070297c?w=800&q=80',
                    'https://images.unsplash.com/photo-1497366754035-f200968a6e72?w=800&q=80',
                    'https://images.unsplash.com/photo-1504384308090-c894fdcc538d?w=800&q=80',
                ],
                'client_name' => 'Osprey Developments Ltd',
                'featured' => true,
                'sort_order' => 3,
            ],
            [
                'title' => 'The Glass Barn',
                'slug' => 'the-glass-barn',
                'category' => 'residential',
                'description' => 'A barn conversion that refuses nostalgia. The original oak frame is retained and celebrated, but the infill panels have been replaced entirely with structural glass, dissolving the boundary between the Chiltern countryside and the domestic interior. Underfloor heating runs through polished concrete floors, and a mezzanine study hovers within the double-height living space.',
                'brief' => 'Convert a 17th-century agricultural barn into a modern 2-bedroom weekend retreat.',
                'location' => 'Great Missenden, Buckinghamshire',
                'year' => '2023',
                'area' => '1,800 sq ft',
                'image' => 'https://images.unsplash.com/photo-1600047509807-ba8f99d2cdde?w=1200&q=80',
                'gallery' => [
                    'https://images.unsplash.com/photo-1583608205776-bfd35f0d9f83?w=800&q=80',
                    'https://images.unsplash.com/photo-1600566753086-00f18fb6b3ea?w=800&q=80',
                ],
                'client_name' => 'Private Client',
                'featured' => false,
                'sort_order' => 4,
            ],
            [
                'title' => 'Henley Riverside Hotel',
                'slug' => 'henley-riverside-hotel',
                'category' => 'commercial',
                'description' => 'A 42-room boutique hotel positioned along the Thames at Henley-on-Thames. The design language draws from the town\'s rowing heritage — long, low horizontal forms that echo the waterline, clad in dark zinc with warm timber reveals. Public spaces open directly onto a riverside terrace, and the rooftop spa offers panoramic views of the regatta course.',
                'brief' => 'Design a 4-star boutique hotel that connects guests to the river while respecting the conservation area setting.',
                'location' => 'Henley-on-Thames, Oxfordshire',
                'year' => '2023',
                'area' => '32,000 sq ft',
                'image' => 'https://images.unsplash.com/photo-1566073771259-6a8506099945?w=1200&q=80',
                'gallery' => [
                    'https://images.unsplash.com/photo-1582719508461-905c673771fd?w=800&q=80',
                    'https://images.unsplash.com/photo-1520250497591-112f2f40a3f4?w=800&q=80',
                ],
                'client_name' => 'Thames Hospitality Group',
                'featured' => false,
                'sort_order' => 5,
            ],
            [
                'title' => 'Beaconsfield Library',
                'slug' => 'beaconsfield-library',
                'category' => 'public',
                'description' => 'A new-build community library that replaces an ageing 1960s facility. The design places reading rooms at the perimeter to maximise natural light, with a central double-height void housing the main collection. The children\'s library is a playful timber box that cantilevers over the entrance, creating a covered outdoor reading garden. CLT construction allowed the building to achieve Passivhaus certification.',
                'brief' => 'Replace the existing library with a net-zero community facility that doubles as a civic gathering space.',
                'location' => 'Beaconsfield, Buckinghamshire',
                'year' => '2025',
                'area' => '8,200 sq ft',
                'image' => 'https://images.unsplash.com/photo-1568667256549-094345857637?w=1200&q=80',
                'gallery' => [
                    'https://images.unsplash.com/photo-1521587760476-6c12a4b040da?w=800&q=80',
                    'https://images.unsplash.com/photo-1507842217343-583bb7270b66?w=800&q=80',
                ],
                'client_name' => 'Buckinghamshire Council',
                'featured' => false,
                'sort_order' => 6,
            ],
            [
                'title' => 'Marlow Penthouse',
                'slug' => 'marlow-penthouse',
                'category' => 'interior',
                'description' => 'A complete interior transformation of a top-floor apartment overlooking Marlow\'s historic high street. The brief demanded a space that felt like a private members\' club — rich, layered, and unapologetically luxurious. Dark-stained walnut joinery, brushed brass hardware, and bespoke Italian stone surfaces create an atmosphere of quiet opulence. Every piece of furniture was specified to the client\'s dimensions.',
                'brief' => 'Full interior design of a 2-bedroom penthouse for an art collector couple.',
                'location' => 'Marlow, Buckinghamshire',
                'year' => '2024',
                'area' => '2,100 sq ft',
                'image' => 'https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?w=1200&q=80',
                'gallery' => [
                    'https://images.unsplash.com/photo-1616486338812-3dadae4b4ace?w=800&q=80',
                    'https://images.unsplash.com/photo-1600607687644-aac4c3eac7f4?w=800&q=80',
                ],
                'client_name' => 'Private Client',
                'featured' => false,
                'sort_order' => 7,
            ],
            [
                'title' => 'Chiltern Wellness Retreat',
                'slug' => 'chiltern-wellness-retreat',
                'category' => 'commercial',
                'description' => 'A destination spa set within an ancient beech woodland in the Chiltern Hills. Rammed earth walls, green roofs, and natural swimming pools blur the line between architecture and landscape. The main building is buried into the hillside, with only a single glazed elevation revealing the interior. Guests move through a sequence of thermal experiences — from the Finnish sauna to the cold plunge, each framed by a different view of the forest.',
                'brief' => 'Create a wellness retreat that feels discovered rather than built, minimising visual impact on the AONB.',
                'location' => 'Chiltern Hills, Buckinghamshire',
                'year' => '2025',
                'area' => '12,500 sq ft',
                'image' => 'https://images.unsplash.com/photo-1600585154526-990dced4db0d?w=1200&q=80',
                'gallery' => [
                    'https://images.unsplash.com/photo-1571896349842-33c89424de2d?w=800&q=80',
                    'https://images.unsplash.com/photo-1540518614846-7eded433c457?w=800&q=80',
                ],
                'client_name' => 'Chiltern Wellbeing Ltd',
                'featured' => true,
                'sort_order' => 8,
            ],
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}
