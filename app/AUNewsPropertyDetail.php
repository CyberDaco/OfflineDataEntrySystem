<?php

namespace App;

use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;

class AUNewsPropertyDetail extends Model
{
    protected $table = 'au_news_property_details';

    protected $fillable = ['listing_type', 'auction_date', 'price_from', 'auction_time', 'price_to', 'auction_venue', 'price_description', 'rental_period','bedrooms', 'bathrooms', 
    'lockup_garages', 'land_area', 'land_area_metric', 'car_spaces', 'floor_area', 'lounge_rooms', 'dining_rooms', 'study_rooms', 'family_rumpus', 'toilets',
    'ensuites', 'lounge_dining', 'other_rooms', 'total_floors', 'tennis_court', 'year_built', 'year_refurbished', 'construction_type', 'roof_material', 'scenic_view_type', 
    'air_conditioned', 'scenic_view', 'ducted_heating', 'lift_installed', 'swimming_pool', 'access_security', 'close_to_public', 'water_frontage', 'polished_floors', 
    'canal_frontage', 'open_plan', 'river_frontage', 'renovated', 'lake_frontage', 'ducted_vacuum', 'coast_frontage', 'double_storey', 'fireplace', 'boat_ramp', 'selling_off',
    'vendor_trade', 'heritage_other', 'granny_flat', 'additional_property', 'ad_size', 'ad_photo_type', 'ad_photo_count', 'ad_section', 'ad_exclusive'];
    
    public function setAuctionDateAttribute($date){
        if($date !== ''){
            $this->attributes['auction_date'] = Carbon::createFromFormat('d/m/Y',$date);
        } else {
            $this->attributes['auction_date'] = null;
        }
    }
    
    public function getAuctionDateAttribute($value){
        return $value !== null ? Carbon::parse($value)->format('d/m/Y') : '';
    }
    
    public function setAuctionTimeAttribute($auction_time){
        if($auction_time !== ''){
            $this->attributes['auction_time'] = Carbon::createFromFormat('h:i A',$auction_time);
        } else {
            $this->attributes['auction_time'] = null;
        }
    }
    
    public function getAuctionTimeAttribute($value){
        return $value !== null ? Carbon::parse($value)->format('h:i A') : '';
    }
    
    public function setLandAreaAttribute($value){
        $value != '' ? $this->attributes['land_area'] = $value : $this->attributes['land_area'] = null;
    }
    
    public function setLoungeRoomsAttribute($value){
        $value != '' ? $this->attributes['lounge_rooms'] = $value : $this->attributes['lounge_rooms'] = null;
    }
    
    public function setDiningRoomsAttribute($value){
        $value != '' ? $this->attributes['dining_rooms'] = $value : $this->attributes['dining_rooms'] = null;
    }
    
    public function setFloorAreaAttribute($value){
        $value != '' ? $this->attributes['floor_area'] = $value : $this->attributes['floor_area'] = null;
    }
    
    public function setStudyRoomsAttribute($value){
        $value != '' ? $this->attributes['study_rooms'] = $value : $this->attributes['study_rooms'] = null;
    }
    
    public function setFamilyRumpusAttribute($value){
        $value != '' ? $this->attributes['family_rumpus'] = $value : $this->attributes['family_rumpus'] = null;
    }
    
    public function setToiletsAttribute($value){
        $value != '' ? $this->attributes['toilets'] = $value : $this->attributes['toilets'] = null;
    }
    
    public function setEnsuitesAttribute($value){
        $value != '' ? $this->attributes['ensuites'] = $value : $this->attributes['ensuites'] = null;
    }
    
    public function setLoungeDiningAttribute($value){
        $value != '' ? $this->attributes['lounge_dining'] = $value : $this->attributes['lounge_dining'] = null;
    }
    
    public function setOtherroomsAttribute($value){
        $value != '' ? $this->attributes['other_rooms'] = $value : $this->attributes['other_rooms'] = null;
    }
    
    public function setTotalFloorsAttribute($value){
        $value != '' ? $this->attributes['total_floors'] = $value : $this->attributes['total_floors'] = null;
    }
    
    public function setTennisCourtAttribute($value){
        $value != '' ? $this->attributes['tennis_court'] = $value : $this->attributes['tennis_court'] = null;
    }
    
    public function setYearBuiltAttribute($value){
        $value != '' ? $this->attributes['year_built'] = $value : $this->attributes['year_built'] = null;
    }
    
    public function setYearRefurbishedAttribute($value){
        $value != '' ? $this->attributes['year_refurbished'] = $value : $this->attributes['year_refurbished'] = null;
    }
    
    public function setFloorLevelAttribute($value){
        $value != '' ? $this->attributes['floor_level'] = $value : $this->attributes['floor_level'] = null;
    }
    
    public function setFloorLevelInsideAttribute($value){
        $value != '' ? $this->attributes['floor_level_inside'] = $value : $this->attributes['floor_level_inside'] = null;
    }
    
    public function setPriceFromAttribute($value){
        $value != '' ? $this->attributes['price_from'] = $value : $this->attributes['price_from'] = null;
   }
    
   public function setPriceToAttribute($value){
        $value != '' ? $this->attributes['price_to'] = $value : $this->attributes['price_to'] = null;
    }
   
   public function setAirConditionedAttribute($value){
        $value == 'Y' ? $this->attributes['air_conditioned'] = 'Y' : $this->attributes['air_conditioned'] = '';
    }
    
    public function setScenicViewAttribute($value){
        $value == 'Y' ? $this->attributes['scenic_view'] = 'Y' : $this->attributes['scenic_view'] = '';
    }
   
    public function setDuctedHeatingAttribute($value){
        $value == 'Y' ? $this->attributes['ducted_heating'] = 'Y' : $this->attributes['ducted_heating'] = '';
    }
    
    public function setLiftInstalledAttribute($value){
        $value == 'Y' ? $this->attributes['lift_installed'] = 'Y' : $this->attributes['lift_installed'] = '';
    }
    
    public function setSwimmingPoolAttribute($value){
        $value == 'Y' ? $this->attributes['swimming_pool'] = 'Y' : $this->attributes['swimming_pool'] = '';
    }
    
    public function setAccessSecurityAttribute($value){
        $value == 'Y' ? $this->attributes['access_security'] = 'Y' : $this->attributes['access_security'] = '';
    }
    
    public function setCloseToPublicAttribute($value){
        $value == 'Y' ? $this->attributes['close_to_public'] = 'Y' : $this->attributes['close_to_public'] = '';
    }
    
    public function setWaterFrontageAttribute($value){
        $value == 'Y' ? $this->attributes['water_frontage'] = 'Y' : $this->attributes['water_frontage'] = '';
    }
    
    public function setPolishedFloorsAttribute($value){
        $value == 'Y' ? $this->attributes['polished_floors'] = 'Y' : $this->attributes['polished_floors'] = '';
    }
    
    public function setCanalFrontageAttribute($value){
        $value == 'Y' ? $this->attributes['canal_frontage'] = 'Y' : $this->attributes['canal_frontage'] = '';
    }
    
    public function setOpenPlanAttribute($value){
        $value == 'Y' ? $this->attributes['open_plan'] = 'Y' : $this->attributes['open_plan'] = '';
    }
    
    public function setRiverFrontageAttribute($value){
        $value == 'Y' ? $this->attributes['river_frontage'] = 'Y' : $this->attributes['river_frontage'] = '';
    }
    
    public function setRenovatedAttribute($value){
        $value == 'Y' ? $this->attributes['renovated'] = 'Y' : $this->attributes['renovated'] = '';
    }
    
    public function setLakeFrontageAttribute($value){
        $value == 'Y' ? $this->attributes['lake_frontage'] = 'Y' : $this->attributes['lake_frontage'] = '';
    }
    
    public function setDuctedVacuumAttribute($value){
        $value == 'Y' ? $this->attributes['ducted_vacuum'] = 'Y' : $this->attributes['ducted_vacuum'] = '';
    }
    
    public function setCoastFrontageAttribute($value){
        $value == 'Y' ? $this->attributes['coast_frontage'] = 'Y' : $this->attributes['coast_frontage'] = '';
    }
    
    public function setDoubleStoreyAttribute($value){
        $value == 'Y' ? $this->attributes['double_storey'] = 'Y' : $this->attributes['double_storey'] = '';
    }
    
    public function setFireplaceAttribute($value){
        $value == 'Y' ? $this->attributes['fireplace'] = 'Y' : $this->attributes['fireplace'] = '';
    }
    
    public function setBoatRampAttribute($value){
        $value == 'Y' ? $this->attributes['boat_ramp'] = 'Y' : $this->attributes['boat_ramp'] = '';
    }
    
    public function setSellingOffAttribute($value){
        $value == 'Y' ? $this->attributes['selling_off'] = 'Y' : $this->attributes['selling_off'] = '';
    }
    
    public function setVendorTradeAttribute($value){
        $value == 'Y' ? $this->attributes['vendor_trade'] = 'Y' : $this->attributes['vendor_trade'] = '';
    }
    
    public function setHeritageOtherAttribute($value){
        $value == 'Y' ? $this->attributes['heritage_other'] = 'Y' : $this->attributes['heritage_other'] = '';
    }
    
    public function setGrannyFlatAttribute($value){
        $value == 'Y' ? $this->attributes['granny_flat'] = 'Y' : $this->attributes['granny_flat'] = '';
    }
    
    public function setPermanentWaterAttribute($value){
        $value == 'Y' ? $this->attributes['permanent_water'] = 'Y' : $this->attributes['permanent_water'] = '';
    }
    
    public function setElectricityAttribute($value){
        $value == 'Y' ? $this->attributes['electricity'] = 'Y' : $this->attributes['electricity'] = '';
    }
    
    public function setSealedRoadsAttribute($value){
        $value == 'Y' ? $this->attributes['sealed_roads'] = 'Y' : $this->attributes['sealed_roads'] = '';
    }
    
    public function setAllWeatherAttribute($value){
        $value == 'Y' ? $this->attributes['all_weather'] = 'Y' : $this->attributes['all_weather'] = '';
    }
    
    public function setTownWaterAttribute($value){
        $value == 'Y' ? $this->attributes['town_water'] = 'Y' : $this->attributes['town_water'] = '';
    }
    
    public function setTownSewerageAttribute($value){
        $value == 'Y' ? $this->attributes['town_sewerage'] = 'Y' : $this->attributes['town_sewerage'] = '';
    }
    
    public function setCurbChannelAttribute($value){
        $value == 'Y' ? $this->attributes['curb_channel'] = 'Y' : $this->attributes['curb_channel'] = '';
    }
    
    public function setFloodingAttribute($value){
        $value == 'Y' ? $this->attributes['flooding'] = 'Y' : $this->attributes['flooding'] = '';
    }
    
    public function setPhoneServiceAttribute($value){
        $value == 'Y' ? $this->attributes['phone_service'] = 'Y' : $this->attributes['phone_service'] = '';
    }
    
    public function setSubdivisionAttribute($value){
        $value == 'Y' ? $this->attributes['subdivision'] = 'Y' : $this->attributes['subdivision'] = '';
    }
    
    public function setTreesAttribute($value){
        $value == 'Y' ? $this->attributes['trees'] = 'Y' : $this->attributes['trees'] = '';
    }
    
    public function setListingTypeAttribute($value)
    {
        $this->attributes['listing_type'] = strtoupper($value);
    }
    
    public function setAuctionVenueAttribute($value)
    {
        $this->attributes['auction_venue'] = strtoupper($value);
    }
    
    public function setPriceDescriptionAttribute($value)
    {
        $this->attributes['price_description'] = strtoupper($value);
    }
    
    public function setRentalPeriodAttribute($value)
    {
        $this->attributes['rental_period'] = strtoupper($value);
    }
    
    public function setConstructionTypeAttribute($value)
    {
        $this->attributes['construction_type'] = strtoupper($value);
    }
    
    public function setRoofMaterialAttribute($value)
    {
        $this->attributes['roof_material'] = strtoupper($value);
    }
    
    public function setScenicViewTypeAttribute($value)
    {
        $this->attributes['scenic_view_type'] = strtoupper($value);
    }
    
    public function setAdditionalPropertyAttribute($value)
    {
        $this->attributes['additional_property'] = strtoupper($value);
    }
    
    public function setAdSizeAttribute($value)
    {
        $this->attributes['ad_size'] = strtoupper($value);
    }
    
    public function setAdPhotoTypeAttribute($value)
    {
        $this->attributes['ad_photo_type'] = strtoupper($value);
    }
    
    public function setAdPhotoCountAttribute($value)
    {
        $this->attributes['ad_photo_count'] = strtoupper($value);
    }
    
    public function setAdSectionAttribute($value)
    {
        $this->attributes['ad_section'] = strtoupper($value);
    }
    
    public function setAdExclusiveAttribute($value)
    {
        $this->attributes['ad_exclusive'] = strtoupper($value);
    }
    
    

    
}
