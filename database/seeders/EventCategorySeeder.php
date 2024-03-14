<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use App\Models\EventCategory;
use Faker\Factory as Faker;

class EventCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        // Define an array of event category names
        $categories = [
            'Music Festivals' => 'Experience the ultimate celebration of music with our vibrant music festivals. From rock to jazz to electronic beats, immerse yourself in a world of rhythm and melody.',
            'Art Exhibitions' => 'Explore the depths of creativity and imagination at our captivating art exhibitions. Admire the works of talented artists from around the world and be inspired by their unique perspectives.',
            'Food & Drink Festivals' => 'Indulge your senses in a culinary adventure at our food and drink festivals. From delectable dishes to exquisite beverages, discover a world of flavors and gastronomic delights.',
            'Sporting Events' => 'Feel the adrenaline rush and excitement of competitive sports at our thrilling sporting events. Whether you\'re a participant or a spectator, join us for an action-packed experience.',
            'Fashion Shows' => 'Step into the world of haute couture and runway glamour at our dazzling fashion shows. Witness the latest trends and designs showcased by top designers and models.',
            'Cultural Celebrations' => 'Celebrate diversity and heritage at our vibrant cultural celebrations. Experience traditional music, dance, and cuisine from around the globe in an atmosphere of unity and joy.',
            'Tech Conferences' => 'Stay ahead of the curve with our cutting-edge tech conferences. Explore the latest innovations and trends in technology, and connect with industry leaders and experts.',
            'Film Screenings' => 'Escape into the world of cinema at our captivating film screenings. From indie gems to blockbuster hits, immerse yourself in stories that entertain, inspire, and provoke thought.',
            'Wellness Retreats' => 'Nourish your mind, body, and soul at our rejuvenating wellness retreats. Join us for yoga, meditation, and holistic therapies to restore balance and vitality to your life.',
            'Comedy Nights' => 'Laugh until your sides hurt at our uproarious comedy nights. Sit back, relax, and enjoy the comedic talents of stand-up comedians and improv troupes guaranteed to tickle your funny bone.',
            'Dance Performances' => 'Experience the beauty and grace of dance at our mesmerizing performances. From ballet to hip-hop to traditional folk dances, be captivated by the artistry and expression of movement.',
            'Literary Readings' => 'Journey into the realm of literature at our inspiring literary readings. Listen to authors share their stories, poems, and insights, and engage in thought-provoking discussions about the written word.',
            'Outdoor Adventures' => 'Embark on thrilling outdoor adventures with our adrenaline-pumping excursions. From hiking to kayaking to zip-lining, explore the great outdoors and experience the beauty of nature firsthand.',
            'Business Seminars' => 'Sharpen your skills and expand your knowledge with our informative business seminars. Learn from industry experts and thought leaders as they share insights and strategies for success in the business world.',
            'Charity Galas' => 'Make a difference and give back to the community at our glamorous charity galas. Join us for an evening of philanthropy, entertainment, and goodwill as we raise funds and support worthy causes.',
            'Craft Workshops' => 'Unleash your creativity and learn new skills at our hands-on craft workshops. From painting to pottery to DIY projects, discover the joy of making something beautiful with your own hands.',
            'Yoga Retreats' => 'Find inner peace and serenity at our blissful yoga retreats. Reconnect with yourself through yoga, meditation, and mindfulness practices in tranquil settings surrounded by nature.',
            'Photography Exhibits' => 'Capture the beauty of the world through the lens of photography at our inspiring exhibits. Admire stunning images that tell stories, evoke emotions, and showcase the wonders of our planet.',
            'Educational Workshops' => 'Expand your knowledge and broaden your horizons at our informative educational workshops. Dive deep into diverse topics and subjects, and engage in stimulating discussions with experts and enthusiasts.',
            'Wine Tastings' => 'Indulge in the rich flavors and aromas of fine wines at our delightful tastings. Sample a variety of wines from around the world and discover new favorites as you explore the art of wine appreciation.',
            'Theater Productions' => 'Be transported to magical worlds and dramatic tales at our captivating theater productions. Experience the thrill of live performances as talented actors bring stories to life on stage.',
            'Environmental Awareness Events' => 'Join us in raising awareness and promoting sustainability at our environmental events. Learn about pressing environmental issues and participate in initiatives to protect and preserve our planet.',
            'Family Fun Days' => 'Create lasting memories with your loved ones at our exciting family fun days. Enjoy a day filled with games, activities, and entertainment for all ages as you bond and share laughter together.',
            'Car Shows' => 'Experience the beauty and innovation of automotive design at our spectacular car shows. Admire classic cars, vintage models, and cutting-edge vehicles as they shine under the spotlight.',
            'Gaming Tournaments' => 'Enter the world of competitive gaming at our thrilling tournaments. Test your skills, strategize with teammates, and compete against rivals in epic battles across a variety of gaming genres.',
            'Travel Expos' => 'Embark on a journey of discovery at our immersive travel expos. Explore destinations near and far, connect with travel experts, and plan your next adventure with insider tips and insights.',
            'Science Fairs' => 'Ignite your curiosity and fascination with science at our engaging science fairs. Discover the wonders of the natural world, conduct experiments, and learn about groundbreaking scientific discoveries.',
            'Cooking Classes' => 'Unleash your inner chef and master the art of cooking at our interactive classes. From basic culinary skills to gourmet techniques, sharpen your knife skills and create delicious dishes with confidence.',
            'Historical Reenactments' => 'Step back in time and relive history at our captivating reenactments. Experience the sights, sounds, and stories of the past as costumed actors recreate pivotal moments from bygone eras.',
            'Volunteer Opportunities' => 'Make a difference and give back to the community through our rewarding volunteer opportunities. Join us in lending a helping hand, supporting worthy causes, and spreading kindness and compassion.'
        ];

        // Insert fake event categories into the database
        foreach ($categories as $name => $description) {
            Category::create([
                'name' => $name,
                'description' => $description,
            ]);
        }
    }
}
