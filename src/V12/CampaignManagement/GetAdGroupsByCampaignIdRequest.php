<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Gets the ad groups within the specified campaign.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/getadgroupsbycampaignid?view=bingads-12 GetAdGroupsByCampaignId Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetAdGroupsByCampaignId
     */
    final class GetAdGroupsByCampaignIdRequest
    {
        /**
         * The identifier of the campaign that contains the ad groups to get.
         * @var integer
         */
        public $CampaignId;
    }
}
