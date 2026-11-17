<?php

use JeffersonGoncalves\CcpaNotices\Models\ProcessingActivity;
use JeffersonGoncalves\Filament\CcpaNotices\CcpaNoticesPlugin;
use JeffersonGoncalves\Filament\CcpaNotices\Resources\ProcessingActivities\Pages\CreateProcessingActivity;
use JeffersonGoncalves\Filament\CcpaNotices\Resources\ProcessingActivities\Pages\EditProcessingActivity;
use JeffersonGoncalves\Filament\CcpaNotices\Resources\ProcessingActivities\Pages\ListProcessingActivities;
use JeffersonGoncalves\Filament\CcpaNotices\Resources\ProcessingActivities\ProcessingActivityResource;
use JeffersonGoncalves\Filament\CcpaNotices\Tests\Fixtures\TestUser;
use Livewire\Livewire;

beforeEach(function () {
    $this->actingAs(TestUser::create(['name' => 'DPO', 'email' => 'dpo@example.com']));
});

it('creates a processing activity linked to models, sources and recipients', function () {
    Livewire::test(CreateProcessingActivity::class)
        ->fillForm([
            'name' => 'Billing',
            'purpose' => 'Issue invoices',
            'consumers' => ['customers'],
            'models' => [TestUser::class],
            'sources' => ['directly from you'],
            'recipients' => [['name' => 'Stripe', 'role' => 'service_provider']],
            'retention' => '5 years',
        ])
        ->call('create')
        ->assertHasNoFormErrors();

    expect(ProcessingActivity::sole())
        ->consumers->toBe(['customers'])
        ->models->toBe([TestUser::class])
        ->sources->toBe(['directly from you'])
        ->recipients->toBe([['name' => 'Stripe', 'role' => 'service_provider']]);
});

it('requires a name and a purpose', function () {
    Livewire::test(CreateProcessingActivity::class)
        ->fillForm(['name' => '', 'purpose' => ''])
        ->call('create')
        ->assertHasFormErrors(['name' => 'required', 'purpose' => 'required']);
});

it('lists and edits activities', function () {
    $activity = ProcessingActivity::create(['name' => 'Billing', 'purpose' => 'Invoices', 'recipients' => [['name' => 'Stripe', 'role' => 'service_provider']]]);

    Livewire::test(ListProcessingActivities::class)
        ->assertCanSeeTableRecords([$activity])
        ->assertSee('Stripe');

    Livewire::test(EditProcessingActivity::class, ['record' => $activity->getKey()])
        ->fillForm(['retention' => '7 years'])
        ->call('save')
        ->assertHasNoFormErrors();

    expect($activity->fresh()->retention)->toBe('7 years');
});

it('exports the notice data as JSON', function () {
    ProcessingActivity::create(['name' => 'Billing', 'purpose' => 'Invoices', 'models' => [TestUser::class]]);

    Livewire::test(ListProcessingActivities::class)
        ->callAction('export')
        ->assertFileDownloaded('ccpa-notices-'.now()->format('Y-m-d').'.json');
});

it('applies the fluent plugin options', function () {
    CcpaNoticesPlugin::get()->navigationGroup('CCPA')->slug('notices');

    expect(ProcessingActivityResource::getNavigationGroup())->toBe('CCPA')
        ->and(ProcessingActivityResource::getSlug())->toBe('notices');
});
