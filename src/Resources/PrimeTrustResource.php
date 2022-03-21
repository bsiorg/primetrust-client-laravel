<?php

namespace BsiOrg\PrimeTrust\Resources;

use BsiOrg\PrimeTrust\PrimeTrust;

trait PrimeTrustResource
{
    public function resource($resource): PrimeTrust
    {
        $this->resource = $resource;

        return $this;
    }

    public function accessPolicies(): PrimeTrust
    {
        $this->resource = 'access-policies';

        return $this;
    }

    public function accountAggregatePolicies(): PrimeTrust
    {
        $this->resource = 'account-aggregate-policies';

        return $this;
    }

    public function accountAssetTotals(): PrimeTrust
    {
        $this->resource = 'account-asset-totals';

        return $this;
    }

    public function accountCashTotals(): PrimeTrust
    {
        $this->resource = 'account-cash-totals';

        return $this;
    }

    public function accountCashTransferReviews(): PrimeTrust
    {
        $this->resource = 'account-cash-transfer-reviews';

        return $this;
    }

    public function accountCashTransfers(): PrimeTrust
    {
        $this->resource = 'account-cash-transfers';

        return $this;
    }

    public function accountPolicies(): PrimeTrust
    {
        $this->resource = 'account-policies';

        return $this;
    }

    public function accountQuestionnaires(): PrimeTrust
    {
        $this->resource = 'account-questionnaires';

        return $this;
    }

    public function accountStatements(): PrimeTrust
    {
        $this->resource = 'account-statements';

        return $this;
    }

    public function accountSubTypes(): PrimeTrust
    {
        $this->resource = 'account-sub-types';

        return $this;
    }

    public function accountTransferAuthorizations(): PrimeTrust
    {
        $this->resource = 'account-transfer-authorizations';

        return $this;
    }

    public function accountTypes(): PrimeTrust
    {
        $this->resource = 'account-types';

        return $this;
    }

    public function accounts(): PrimeTrust
    {
        $this->resource = 'accounts';

        return $this;
    }

    public function achOriginators(): PrimeTrust
    {
        $this->resource = 'ach-originators';

        return $this;
    }

    public function addresses(): PrimeTrust
    {
        $this->resource = 'addresses';

        return $this;
    }

    public function advancedFilters(): PrimeTrust
    {
        $this->resource = 'advanced-filters';

        return $this;
    }

    public function agreementPreviews(): PrimeTrust
    {
        $this->resource = 'agreement-previews';

        return $this;
    }

    public function agreements(): PrimeTrust
    {
        $this->resource = 'agreements';

        return $this;
    }

    public function amlChecks(): PrimeTrust
    {
        $this->resource = 'aml-checks';

        return $this;
    }

    public function assetContributions(): PrimeTrust
    {
        $this->resource = 'asset-contributions';

        return $this;
    }

    public function assetDisbursements(): PrimeTrust
    {
        $this->resource = 'asset-disbursements';

        return $this;
    }

    public function assetTransactionTaxLots(): PrimeTrust
    {
        $this->resource = 'asset-transaction-tax-lots';

        return $this;
    }

    public function assetTransactions(): PrimeTrust
    {
        $this->resource = 'asset-transactions';

        return $this;
    }

    public function assetTransferMethods(): PrimeTrust
    {
        $this->resource = 'asset-transfer-methods';

        return $this;
    }

    public function assetTransfers(): PrimeTrust
    {
        $this->resource = 'asset-transfers';

        return $this;
    }

    public function assets(): PrimeTrust
    {
        $this->resource = 'assets';

        return $this;
    }

    public function authorizationGroups(): PrimeTrust
    {
        $this->resource = 'authorization-groups';

        return $this;
    }

    public function authorizationItems(): PrimeTrust
    {
        $this->resource = 'authorization-items';

        return $this;
    }

    public function authorizationRuleGroups(): PrimeTrust
    {
        $this->resource = 'authorization-rule-groups';

        return $this;
    }

    public function banks(): PrimeTrust
    {
        $this->resource = 'banks';

        return $this;
    }

    public function brokerAccountAuthorizations(): PrimeTrust
    {
        $this->resource = 'broker-account-authorizations';

        return $this;
    }

    public function cardHolderVerifications(): PrimeTrust
    {
        $this->resource = 'card-holder-verifications';

        return $this;
    }

    public function cardHolders(): PrimeTrust
    {
        $this->resource = 'card-holders';

        return $this;
    }

    public function cardTransactions(): PrimeTrust
    {
        $this->resource = 'card-transactions';

        return $this;
    }

    public function cards(): PrimeTrust
    {
        $this->resource = 'cards';

        return $this;
    }

    public function cashTransactions(): PrimeTrust
    {
        $this->resource = 'cash-transactions';

        return $this;
    }

    public function chargebacks(): PrimeTrust
    {
        $this->resource = 'chargebacks';

        return $this;
    }

    public function cipChecks(): PrimeTrust
    {
        $this->resource = 'cip-checks';

        return $this;
    }

    /** @deprecated */
    public function commonTrustPortfolios(): PrimeTrust
    {
        $this->resource = 'common-trust-portfolios';

        return $this;
    }

    public function contactBeneficiaries(): PrimeTrust
    {
        $this->resource = 'contact-beneficiaries';

        return $this;
    }

    public function contactFundsTransferReferences(): PrimeTrust
    {
        $this->resource = 'contact-funds-transfer-references';

        return $this;
    }

    public function contactRelationships(): PrimeTrust
    {
        $this->resource = 'contact-relationships';

        return $this;
    }

    public function contacts(): PrimeTrust
    {
        $this->resource = 'contacts';

        return $this;
    }

    public function contingentHolds(): PrimeTrust
    {
        $this->resource = 'contingent-holds';

        return $this;
    }

    public function contributions(): PrimeTrust
    {
        $this->resource = 'contributions';

        return $this;
    }

    public function countries(): PrimeTrust
    {
        $this->resource = 'countries';

        return $this;
    }

    public function creditCardResources(): PrimeTrust
    {
        $this->resource = 'credit-card-resources';

        return $this;
    }

    public function currencies(): PrimeTrust
    {
        $this->resource = 'currencies';

        return $this;
    }

    public function disbursementAuthorizations(): PrimeTrust
    {
        $this->resource = 'disbursement-authorizations';

        return $this;
    }

    public function disbursements(): PrimeTrust
    {
        $this->resource = 'disbursements';

        return $this;
    }

    public function electronicSignatures(): PrimeTrust
    {
        $this->resource = 'electronic-signatures';

        return $this;
    }

    public function ethereumAssets(): PrimeTrust
    {
        $this->resource = 'ethereum-assets';

        return $this;
    }

    public function freezeActionItems(): PrimeTrust
    {
        $this->resource = 'freeze-action-items';

        return $this;
    }

    public function fundsTransferMethods(): PrimeTrust
    {
        $this->resource = 'funds-transfer-methods';

        return $this;
    }

    public function fundsTransfers(): PrimeTrust
    {
        $this->resource = 'funds-transfers';

        return $this;
    }

    public function internalAssetTransferReviews(): PrimeTrust
    {
        $this->resource = 'internal-asset-transfer-reviews';

        return $this;
    }

    public function internalAssetTransfers(): PrimeTrust
    {
        $this->resource = 'internal-asset-transfers';

        return $this;
    }

    public function iraRolloverForms(): PrimeTrust
    {
        $this->resource = 'ira-rollover-forms';

        return $this;
    }

    public function kycActionItems(): PrimeTrust
    {
        $this->resource = 'kyc-action-items';

        return $this;
    }

    public function kycDocumentChecks(): PrimeTrust
    {
        $this->resource = 'kyc-document-checks';

        return $this;
    }

    public function nocCorrections(): PrimeTrust
    {
        $this->resource = 'noc-corrections';

        return $this;
    }

    public function organizations(): PrimeTrust
    {
        $this->resource = 'organizations';

        return $this;
    }

    /** @deprecated */
    public function paymentMethods(): PrimeTrust
    {
        $this->resource = 'payment-methods';

        return $this;
    }

    public function phoneNumbers(): PrimeTrust
    {
        $this->resource = 'phone-numbers';

        return $this;
    }

    public function plaidItems(): PrimeTrust
    {
        $this->resource = 'plaid-items';

        return $this;
    }

    public function pushTransferMethods(): PrimeTrust
    {
        $this->resource = 'push-transfer-methods';

        return $this;
    }

    public function quotes(): PrimeTrust
    {
        $this->resource = 'quotes';

        return $this;
    }

    public function refunds(): PrimeTrust
    {
        $this->resource = 'refunds';

        return $this;
    }

    public function resourceTokens(): PrimeTrust
    {
        $this->resource = 'resource-tokens';

        return $this;
    }

    public function rtpInitiators(): PrimeTrust
    {
        $this->resource = 'rtp-initiators';

        return $this;
    }

    public function ruleGroups(): PrimeTrust
    {
        $this->resource = 'rule-groups';

        return $this;
    }

    public function rules(): PrimeTrust
    {
        $this->resource = 'rules';

        return $this;
    }

    /** @deprecated */
    public function securities(): PrimeTrust
    {
        $this->resource = 'securities';

        return $this;
    }

    public function subAssetTransfers(): PrimeTrust
    {
        $this->resource = 'sub-asset-transfers';

        return $this;
    }

    public function tradeSettlementConfigs(): PrimeTrust
    {
        $this->resource = 'trade-settlement-configs';

        return $this;
    }

    public function tradeSettlements(): PrimeTrust
    {
        $this->resource = 'trade-settlements';

        return $this;
    }

    public function trades(): PrimeTrust
    {
        $this->resource = 'trades';

        return $this;
    }

    public function uploadedDocuments(): PrimeTrust
    {
        $this->resource = 'uploaded-documents';

        return $this;
    }

    public function userGroups(): PrimeTrust
    {
        $this->resource = 'user-groups';

        return $this;
    }

    public function userInvitationReviews(): PrimeTrust
    {
        $this->resource = 'user-invitation-reviews';

        return $this;
    }

    public function userInvitations(): PrimeTrust
    {
        $this->resource = 'user-invitations';

        return $this;
    }

    public function users(): PrimeTrust
    {
        $this->resource = 'users';

        return $this;
    }

    public function webhookConfigs(): PrimeTrust
    {
        $this->resource = 'webhook-configs';

        return $this;
    }

    public function webhooks(): PrimeTrust
    {
        $this->resource = 'webhooks';

        return $this;
    }

    public function wireInitiators(): PrimeTrust
    {
        $this->resource = 'wire-initiators';

        return $this;
    }
}
