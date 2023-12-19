<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("products")->insert([
            "product_name" => "Multi-Camera Video",
            "product_title" => "Multi-Camera Video",
            "product_subtitle" => "Capture every moment from every angle with our Multi-camera Video service.",
            "product_icon" => '<i class="fas fa-video"></i>',
            "product_description" => "Multi-camera video is a video production technique using multiple cameras and other equipment to
            record a scene or event from different angles simultaneously. It is often used in concerts and
            other live events and allows the production team to edit the resulting footage more
            creatively.",
            "product_content" => "
                <p>
                    At Gonzalo Producciones, we take visual storytelling to the next level with our innovative service
                    of Multi-camera Video. We understand the importance of capturing every detail, emotion and unique
                    perspective, and it is
                    That's why we offer an unparalleled cinematic experience for your special moments.
                </p>
                <b> Featured Features:</b>
                <p>
                    <b>1. Multiple Perspectives, One Story:</b> Our expert team uses multiple cameras
                    Strategically located to capture every moment from unique angles. Whether it's a wedding, an event
                    corporate or any special occasion, we ensure that not even the smallest detail is missed.
                </p>
                <p>
                    <b>2. Fluency and Professionalism:</b> The perfect synchronization of the cameras guarantees a smooth
                    transition
                    between
                    shots, creating a seamless viewing experience. We are proud to offer a professional service that is
                    adapts to your needs and exceeds your expectations.
                </p>
                <p>
                    <b>3. High Quality Editing:</b> Our team of expert editors work diligently to ensure that the
                    final result is a visual masterpiece. From color correction to sound editing, we
                    We ensure that every detail contributes to the overall narrative.
                </p>
                <p>
                    <b>4. Total Customization:</b> We understand that each event is unique, and that is why we offer
                    customization
                    options.
                    customization to adapt to your preferences. From music choice to editing style,
                    We make sure the video reflects your personal vision and style.
                </p>
                <p>
                    At Gonzalo Producciones, we believe that every moment deserves to be immortalized in a unique and
                    captivating way.
                    With our Multi-camera Video service, we invite you to experience the magic of visual storytelling
                    from all angles. Let us be part of your visual story and transform your memories into moments
                    eternal
                </p>
                <p> Contact us today to find out how we can make your event unforgettable!</p>
            "
        ]);

        DB::table("products")->insert([
            "product_name" => "Cinematic Video",
            "product_title" => "Cinematic Video",
            "product_subtitle" => "Explore the magic of cinema with our Cinematic Camera service",
            "product_icon" => '<i class="fa fa-film"></i>',
            "product_description" => "Cinematic video is a video production technique using multiple cameras and other equipment to
            record a scene or event from different angles simultaneously. It is often used in concerts and
            other live events and allows the production team to edit the resulting footage more
            creatively.",
            "product_content" => "
                <p>
                    At Gonzalo Producciones, we elevate your special moments to a unique cinematic experience with our
                    Cinematic Camera service. Every event, from weddings to corporate productions, is transformed into a
                    visual
                    masterpiece, captured with the quality and style that only a film camera can offer.
                </p>
                <b> Featured Features:</b>
                <p>
                    <b>1. Cinematographic Quality:</b> Our cinematic cameras capture every detail with exceptional image
                    quality.
                    Unparalleled depth of field and sharpness provide a cinematic look to your most precious memories.
                </p>
                <p>
                    <b>2. Artistic Approach:</b> We specialize in creating cinematic images that transcend the ordinary. Our
                    team of
                    expert filmmakers use creative techniques to deliver a unique visual aesthetic, ensuring each shot tells
                    a
                    story on its own.
                </p>
                <p>
                    <b>3. Cinematic Movement:</b> We add a dynamic touch to your moments with smooth and precise camera
                    movements. From
                    elegant slides to captivating aerial shots, our team uses cinematic techniques to achieve a visual
                    impact
                    that lasts.
                </p>
                <p>
                    <b>4. Film Editing:</b> Our specialized editors work meticulously to bring your memories to life. From
                    color
                    correction to sound editing, every detail is taken care of with attention to cinematic quality, creating
                    an
                    authentic viewing experience.
                </p>
                <p>
                    <b>5. Immersive Experience:</b> Immerse yourself in your memories in a completely new way. With our
                    Cinematic
                    Camera service, we don't just capture moments, we create an immersive visual experience that instantly
                    transports you back with every playback.
                </p>
                <p>
                    At Gonzalo Producciones, we believe that every moment deserves to be portrayed with the grandeur and
                    charm
                    of cinema. With our Cinematic Camera service, we invite you to discover a new dimension of personal
                    cinematography. Let us transform your events into cinematic masterpieces.
                </p>
                <p>Contact us today to explore how we can bring your memories to life on the big screen!</p>
            "
        ]);

        DB::table("products")->insert([
            "product_name" => "Drone",
            "product_title" => "Drone",
            "product_subtitle" => "Elevate your memories with our Drone Photography",
            "product_icon" => '<i class="fa fa-helicopter"></i>',
            "product_description" => "Drone video is a video production technique using multiple cameras and other equipment to record
            a scene or event from different angles simultaneously. It is often used in concerts and other
            live events and allows the production team to edit the resulting footage more creatively.",
            "product_content" => "
                <p>
                    At Gonzalo Producciones, we take photography to new heights with our specialist Drone Photography
                    service.
                    Discover a unique and captivating perspective of your most special moments, captured from the sky with
                    the
                    latest drone technology.
                </p>
                <b>Featured Features:</b>
                <p>
                    <b>1. Unique Aerial Perspective:</b> Our drones equipped with high-resolution cameras offer a panoramic
                    view from
                    the sky, allowing you to appreciate your events from a completely new perspective. From weddings to
                    corporate events, every shot is an aerial masterpiece.
                </p>
                <p>
                    <b>2. Creativity Without Limits:</b> Experience the freedom of creativity without restrictions. Our
                    expert drone
                    pilots work collaboratively with our photographers to achieve unique shots, whether capturing the
                    majesty of
                    a landscape or the vibrant energy of an event.
                </p>
                <p>
                    <b>3. Location Flexibility:</b> Go beyond the conventional limits of photography. With our drones, there
                    are no
                    geographical limits. We capture moments in remote locations, offering unique versatility that adds a
                    distinctive touch to your memories.
                </p>
                <p>
                    <b>4. Unmatched Details:</b> Every detail counts, and our drones are designed to capture sharpness and
                    clarity in
                    every shot. From above, we achieve visual precision that highlights the beauty of your event in an
                    unmatched
                    way.
                </p>
                <p>
                    <b>5. Film Productions:</b> In addition to photography, we offer aerial videography services. With our
                    drones, we
                    create cinematic productions that transform your memories into dynamic and immersive visual experiences.
                </p>
                <p>
                    At Gonzalo Producciones, we believe that the skies are the perfect canvas to immortalize your special
                    moments. With our Drone Photography, we invite you to elevate your memories and experience photography
                    from
                    a new perspective.
                </p>
                <p>Contact us today to find out how we can bring your events to life from the top!</p>
            "
        ]);
    }
}
