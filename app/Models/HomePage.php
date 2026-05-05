<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomePage extends Model
{
    use HasFactory;

    protected $table = 'home_page';

    protected $fillable = [
        'banner',
        'banner_heading',
        'banner_paragraph',
        'banner_chip',
        'meta_title',
        'meta_description',
        'whychoose_heading',
        'whychoose_paragraph',
        'whychoose_card1_image',

        'our_service_heading',
        'our_service_paragraph',
        'our_service_image',

        'our_service_card1_image',
        'our_service_card1_heading',
        'our_service_card1_paragraph',

        'our_service_card2_image',
        'our_service_card2_heading',
        'our_service_card2_paragraph',

        'our_service_card3_image',
        'our_service_card3_heading',
        'our_service_card3_paragraph',

        'our_service_card4_image',
        'our_service_card4_heading',
        'our_service_card4_paragraph',

        'latest_work_heading',
        'latest_work_paragraph',

        'counter_banner',
        'counter1_heading',
        'counter1',
        'counter2_heading',
        'counter2',
        'counter3_heading',
        'counter3',
        'counter4_heading',
        'counter4',
        
        'testimonial_banner',
        'testimonial_heading',
        'testimonial_paragraph',
        'contactus_heading',
        'contactus_paragraph'
    ];
}