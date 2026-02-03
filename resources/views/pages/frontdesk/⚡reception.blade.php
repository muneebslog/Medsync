<?php

use Livewire\Component;

new class extends Component {
    public $phone;
};
?>

<div class="">

    <section class=" bg-slate-50 dark:bg-zinc-950 min-h-screen text-slate-900 dark:text-zinc-100">
        <div class="max-w-7xl mx-auto space-y-6">

            <header
                class="bg-white dark:bg-zinc-900 p-6 rounded-xl border border-slate-200 dark:border-zinc-800 shadow-sm">
                <h1 class="text-xl font-semibold mb-4 flex items-center gap-2">
                    <flux:icon.user-circle variant="outline" class="text-blue-600 dark:text-blue-400" />
                    Front Desk Reception
                </h1>
                <div class="flex w-full items-center gap-4">

                    <div class="max-w-md w-full">
                        <flux:input wire:model.live="phone" placeholder="Enter patient number" class="w-full"
                            label="Patient Phone Number" mask="9999-9999999" icon="magnifying-glass" />
                    </div>
                    <section class="w-full p-3 mt-3">
                        {{-- <flux:heading level="2" class="mb-4">Patient Members</flux:heading> --}}

                        <div class="flex flex-wrap gap-3">
                            <label class="relative cursor-pointer">
                                <input type="radio" name="member" class="peer sr-only" checked>
                                <div
                                    class="px-4 py-2 rounded-full border border-blue-200 dark:border-blue-900 bg-blue-50 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 peer-checked:ring-2 peer-checked:ring-blue-500 peer-checked:border-transparent transition-all">
                                    <span class="text-sm font-medium">John Doe (Primary)</span>
                                </div>
                            </label>

                            <label class="relative cursor-pointer">
                                <input type="radio" name="member" class="peer sr-only">
                                <div
                                    class="px-4 py-2 rounded-full border border-slate-200 dark:border-zinc-700 bg-white dark:bg-zinc-800 text-slate-600 dark:text-zinc-400 peer-checked:ring-2 peer-checked:ring-blue-500 peer-checked:bg-blue-50 dark:peer-checked:bg-blue-900/30 transition-all hover:bg-slate-50 dark:hover:bg-zinc-700">
                                    <span class="text-sm font-medium">Jane Doe</span>
                                </div>
                            </label>

                            <flux:button icon="plus" variant="subtle" size="sm" class="rounded-full">
                                Add New Member
                            </flux:button>
                        </div>
                    </section>
                </div>

            </header>

            <main class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <div class="lg:col-span-2 space-y-6">



                    <section
                        class="bg-white dark:bg-zinc-900 p-4 rounded-xl border border-slate-200 dark:border-zinc-800 shadow-sm">
                        {{-- <flux:heading level="2" class="mb-4">Service Selection</flux:heading> --}}
                        <div class="grid grid-cols-1 md:grid-cols-5 gap-4 items-end">
                            <div class="lg:col-span-2">
                                <flux:select label="Select Service" >
                                    <flux:select.option>General Consultation</flux:select.option>
                                    <flux:select.option>Emergency Care</flux:select.option>
                                    <flux:select.option>Radiology</flux:select.option>
                                    <flux:select.option>Laboratory</flux:select.option>
                                </flux:select>
                            </div>
                            <div class="lg:col-span-2">
                                <flux:select label="Select Doctor" >
                                    <flux:select.option>Dr. Sarah Smith</flux:select.option>
                                    <flux:select.option>Dr. Michael Chen</flux:select.option>
                                    <flux:select.option>Dr. Elena Rodriguez</flux:select.option>
                                </flux:select>
                            </div>
                            <div class="">
                                <flux:button variant="primary" class="w-full">Add Service</flux:button>
                            </div>

                        </div>
                    </section>

                    <section
                        class="bg-white dark:bg-zinc-900 rounded-xl border border-slate-200 dark:border-zinc-800 shadow-sm overflow-hidden">
                        <div class="p-6 border-b border-slate-100 dark:border-zinc-800">
                            <flux:heading level="2">Active Services</flux:heading>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="w-full text-left border-collapse">
                                <thead class="bg-slate-50 dark:bg-zinc-800/50">
                                    <tr>
                                        <th
                                            class="px-6 py-3 text-xs font-semibold uppercase tracking-wider text-slate-500 dark:text-zinc-400">
                                            Service Name</th>
                                        <th
                                            class="px-6 py-3 text-xs font-semibold uppercase tracking-wider text-slate-500 dark:text-zinc-400">
                                            Doctor</th>
                                        <th
                                            class="px-6 py-3 text-xs font-semibold uppercase tracking-wider text-slate-500 dark:text-zinc-400">
                                            Token</th>
                                        <th
                                            class="px-6 py-3 text-xs font-semibold uppercase tracking-wider text-slate-500 dark:text-zinc-400 text-right">
                                            Price</th>
                                        <th
                                            class="px-6 py-3 text-xs font-semibold uppercase tracking-wider text-slate-500 dark:text-zinc-400 text-center">
                                            Action</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-slate-100 dark:divide-zinc-800">
                                    <tr class="hover:bg-slate-50/50 dark:hover:bg-zinc-800/30 transition-colors">
                                        <td class="px-6 py-4 text-sm font-medium">General Consultation</td>
                                        <td class="px-6 py-4 text-sm">Dr. Sarah Smith</td>
                                        <td class="px-6 py-4 text-sm"><span
                                                class="px-2 py-1 bg-slate-100 dark:bg-zinc-700 rounded font-mono">GC-104</span>
                                        </td>
                                        <td class="px-6 py-4 text-sm text-right font-medium">$50.00</td>
                                        <td class="px-6 py-4 text-center">
                                            <flux:button variant="ghost" size="sm" icon="trash"
                                                class="text-red-500 hover:text-red-600" />
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-slate-50/50 dark:hover:bg-zinc-800/30 transition-colors">
                                        <td class="px-6 py-4 text-sm font-medium">Blood Test (CBC)</td>
                                        <td class="px-6 py-4 text-sm">Lab Services</td>
                                        <td class="px-6 py-4 text-sm"><span
                                                class="px-2 py-1 bg-slate-100 dark:bg-zinc-700 rounded font-mono">LB-022</span>
                                        </td>
                                        <td class="px-6 py-4 text-sm text-right font-medium">$25.00</td>
                                        <td class="px-6 py-4 text-center">
                                            <flux:button variant="ghost" size="sm" icon="trash"
                                                class="text-red-500 hover:text-red-600" />
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </section>
                </div>

                <div class="space-y-6">
                    <section
                        class="bg-white dark:bg-zinc-900 p-6 rounded-xl border border-slate-200 dark:border-zinc-800 shadow-sm">
                        <flux:heading level="2" class="mb-6">Billing Summary</flux:heading>

                        <div class="space-y-3">
                            <div class="flex justify-between text-sm text-slate-500 dark:text-zinc-400">
                                <span>Subtotal</span>
                                <span>$75.00</span>
                            </div>
                            <div class="flex justify-between text-sm text-slate-500 dark:text-zinc-400">
                                <span>Tax (0%)</span>
                                <span>$0.00</span>
                            </div>
                            <div
                                class="pt-3 border-t border-slate-100 dark:border-zinc-800 flex justify-between items-center">
                                <span class="font-semibold text-lg">Total Bill</span>
                                <span class="font-bold text-2xl text-blue-600 dark:text-blue-400">$75.00</span>
                            </div>
                        </div>

                        <div class="mt-8 space-y-3">
                            <flux:button variant="primary" icon="printer" class="w-full py-6 text-lg print:hidden">
                                Print Receipt
                            </flux:button>
                            <flux:button variant="ghost" class="w-full">Clear Session</flux:button>
                        </div>
                    </section>

                    <section
                        class="bg-blue-50/50 dark:bg-blue-900/10 p-6 rounded-xl border border-blue-100 dark:border-blue-900/30">
                        <h3 class="text-sm font-bold text-blue-900 dark:text-blue-300 uppercase tracking-wider mb-3">
                            Patient Record</h3>
                        <div class="text-sm space-y-2 text-blue-800 dark:text-blue-400">
                            <p><strong>Status:</strong> Active</p>
                            <p><strong>Last Visit:</strong> Oct 12, 2025</p>
                            <p><strong>Allergies:</strong> Penicillin</p>
                        </div>
                    </section>
                </div>
            </main>
        </div>

        <div
            class="hidden fixed inset-0 bg-slate-900/50 dark:bg-black/70 backdrop-blur-sm z-50 flex items-center justify-center p-4">
            <div
                class="bg-white dark:bg-zinc-900 w-full max-w-lg rounded-2xl shadow-2xl border border-slate-200 dark:border-zinc-800 overflow-hidden">
                <div class="p-6 border-b border-slate-100 dark:border-zinc-800">
                    <flux:heading level="2">Add New Member</flux:heading>
                    <p class="text-sm text-slate-500 dark:text-zinc-400">Link a new member to this patient profile.</p>
                </div>

                <div class="p-6 space-y-4">
                    <flux:field>
                        <flux:label>Member Name</flux:label>
                        <flux:input placeholder="Full name" />
                    </flux:field>

                    <div class="grid grid-cols-2 gap-4">
                        <flux:field>
                            <flux:label>Age</flux:label>
                            <flux:input type="number" placeholder="Years" />
                        </flux:field>

                        <flux:field>
                            <flux:label>Gender</flux:label>
                            <flux:select>
                                <flux:select.option>Male</flux:select.option>
                                <flux:select.option>Female</flux:select.option>
                                <flux:select.option>Other</flux:select.option>
                            </flux:select>
                        </flux:field>
                    </div>
                </div>

                <div class="p-6 bg-slate-50 dark:bg-zinc-800/50 flex justify-end gap-3">
                    <flux:button variant="ghost">Cancel</flux:button>
                    <flux:button variant="primary">Add Member</flux:button>
                </div>
            </div>
        </div>
    </section>
</div>