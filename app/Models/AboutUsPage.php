<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUsPage extends Model
{
    use HasFactory;

    protected $table = 'about_us_page';

    protected $fillable = [
        'banner',
        'heading',
        'meta_title',
        'meta_description',
        'whychoose_heading',
        'whychoose_subheading',
        'whychoose_paragraph',
        'whychoose_card1_icon',
        'whychoose_card1_heading',
        'whychoose_card2_icon',
        'whychoose_card2_heading',
        'whychoose_card3_icon',
        'whychoose_card3_heading',
        'aboutus_heading',
        'aboutus_paragraph',
        'aboutus_card1_icon',
        'aboutus_card1_heading',
        'aboutus_card1_paragraph',
        'aboutus_card2_icon',
        'aboutus_card2_heading',
        'aboutus_card2_paragraph',
        'aboutus_card3_icon',
        'aboutus_card3_heading',
        'aboutus_card3_paragraph',
        'ourservice_heading',
        'ourservice_paragraph',
        'ourwork_heading',
        'ourwork_paragraph',
        'ourmission_heading',
        'ourmission_paragraph',
        'our_mission_img1',
        'our_mission_img2',
        'our_mission_img3'
    ];
}