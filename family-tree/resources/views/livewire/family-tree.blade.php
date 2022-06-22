<div x-data="{
    branches: [],
    scrollToElement: function($element,offset=30){
        $('html').animate({ scrollTop: $element.offset().top },500)
    },
    addFamilyTreeBranch(branch){
        console.log(branch);
        var that = this
        this.branches[branch.index] =branch.branch;
        setTimeout(function(){
            that.scrollToElement($(`#family-tree > div:nth-child(${(branch.index + 3)})`));
        }, 200);
        console.log(this.branches);
    },
}" @new-branch.window="addFamilyTreeBranch(event.detail);" id="family-tree" class="family-tree family-tree--4-cols" data-cols-num="4">


    <!-- FAMILY TREE BRANCH : begin -->
    <div class="family-tree__branch family-tree-page__branch--has-partners family-tree-page__branch--has-children" data-cols-num="4" data-root-id="77">
        <div class="family-tree__branch-inner">


            <!-- PARTNERS ROW : begin -->
            <div class="family-tree__row family-tree__row--partners">
                <div class="family-tree__row-inner">
                    <div class="family-tree__grid family-tree__grid--partners">

                        <!-- ROOT : begin -->
                        <div class="family-tree__grid-item family-tree__grid-item--root">


                            <!-- CARD : begin -->
                            <div class="family-tree__card family-tree__card--root" data-post-id="77" data-card-type="root">
                                <div class="family-tree__card-inner">


                                    <!-- CARD THUMB : begin -->
                                    <div class="family-tree__card-thumb">
                                        @if($person->photo)
                                        <a href="{{ asset($person->photo) }}" class="family-tree__card-thumb-link" style="background-image: url( {{ asset($person->photo) }} ) ">
                                            <span class="screen-reader-text">Go to profile page</span>
                                        </a>
                                        @else
                                        <a href="{{ asset('template/app-assets/images/portrait/medium/avatar-m-4.png') }}" class="family-tree__card-thumb-link" style="background-image: url( {{ asset('template/app-assets/images/portrait/medium/avatar-m-4.png') }} );">
                                            <span class="screen-reader-text">Go to profile page</span>
                                        </a>
                                        @endif
                                    </div>
                                    <!-- CARD THUMB : end -->

                                    <!-- CARD CONTENT : begin -->
                                    <div class="family-tree__card-content">
                                        <div class="family-tree__card-content-inner">

                                            <!-- CARD TITLE : begin -->
                                            <h4 class="family-tree__card-title">
                                                <a href="{{ route('family.member' ,['id' => $person->id]) }}" class="family-tree__card-title-link">
                                                    {{ $person->name }} </a>
                                            </h4>
                                            <!-- CARD TITLE : end -->


                                            <!-- CARD DATE : begin -->
                                            <p class="family-tree__card-date">
                                                ({{ $person->dateOfBirth }} - {{ $person->dateOfDeath }}) </p>
                                            <!-- CARD DATE : end -->


                                        </div>
                                    </div>
                                    <!-- CARD CONTENT : end -->


                                </div>
                            </div>
                            <!-- CARD : end -->


                        </div>
                        <!-- ROOT : end -->

                        @if(count($person->wifes()) > 0)
                            @foreach($person->wifes() as $wife)
                                <!-- PARTNER : begin -->
                                <div class="family-tree__grid-item ">


                                    <!-- CARD : begin -->
                                    <div class="family-tree__card family-tree__card--partner" data-post-id="78" data-card-type="partner">
                                        <div class="family-tree__card-inner">


                                            <!-- CARD LABEL : begin -->
                                            <h3 class="family-tree__card-label">
                                                <span class="family-tree__card-label-inner">
                                                    زوجة </span>
                                            </h3>
                                            <!-- CARD LABEL : end -->


                                            <!-- CARD THUMB : begin -->
                                            <div class="family-tree__card-thumb">
                                                @if($wife->photo)
                                                <a href="{{ asset($wife->photo) }}" class="family-tree__card-thumb-link" style="background-image: url( {{ asset($wife->photo) }} ) ">
                                                    <span class="screen-reader-text">Go to profile page</span>
                                                </a>
                                                @else
                                                <a href="{{ asset('template/app-assets/images/portrait/medium/avatar-m-4.png') }}" class="family-tree__card-thumb-link" style="background-image: url( {{ asset('template/app-assets/images/portrait/medium/avatar-m-4.png') }} );">
                                                    <span class="screen-reader-text">Go to profile page</span>
                                                </a>
                                                @endif
                                            </div>
                                            <!-- CARD THUMB : end -->

                                            <!-- CARD CONTENT : begin -->
                                            <div class="family-tree__card-content">
                                                <div class="family-tree__card-content-inner">

                                                    <!-- CARD TITLE : begin -->
                                                    <h4 class="family-tree__card-title">
                                                        <a href="{{ route('family.member' ,['id' => $wife->id]) }}" class="family-tree__card-title-link">
                                                            {{ $wife->name }} </a>
                                                    </h4>
                                                    <!-- CARD TITLE : end -->


                                                    <!-- CARD DATE : begin -->
                                                    <p class="family-tree__card-date">
                                                        ({{ $wife->dateOfBirth }} - {{ $wife->dateOfDeath }}) </p>
                                                    <!-- CARD DATE : end -->


                                                </div>
                                            </div>
                                            <!-- CARD CONTENT : end -->


                                        </div>
                                    </div>
                                    <!-- CARD : end -->


                                </div>
                                <!-- PARTNER : end -->
                            @endforeach
                        @endif

                        @if(count($person->husbands()) > 0)
                            @foreach($person->husbands() as $husband)
                                <!-- PARTNER : begin -->
                                <div class="family-tree__grid-item ">


                                    <!-- CARD : begin -->
                                    <div class="family-tree__card family-tree__card--partner" data-post-id="78" data-card-type="partner">
                                        <div class="family-tree__card-inner">


                                            <!-- CARD LABEL : begin -->
                                            <h3 class="family-tree__card-label">
                                                <span class="family-tree__card-label-inner">
                                                    زوج </span>
                                            </h3>
                                            <!-- CARD LABEL : end -->


                                            <!-- CARD THUMB : begin -->
                                            <div class="family-tree__card-thumb">
                                                @if($husband->photo)
                                                <a href="{{ asset($husband->photo) }}" class="family-tree__card-thumb-link" style="background-image: url( {{ asset($husband->photo) }} ) ">
                                                    <span class="screen-reader-text">Go to profile page</span>
                                                </a>
                                                @else
                                                <a href="{{ asset('template/app-assets/images/portrait/medium/avatar-m-4.png') }}" class="family-tree__card-thumb-link" style="background-image: url( {{ asset('template/app-assets/images/portrait/medium/avatar-m-4.png') }} );">
                                                    <span class="screen-reader-text">Go to profile page</span>
                                                </a>
                                                @endif
                                            </div>
                                            <!-- CARD THUMB : end -->

                                            <!-- CARD CONTENT : begin -->
                                            <div class="family-tree__card-content">
                                                <div class="family-tree__card-content-inner">

                                                    <!-- CARD TITLE : begin -->
                                                    <h4 class="family-tree__card-title">
                                                        <a href="{{ route('family.member' ,['id' => $husband->id]) }}" class="family-tree__card-title-link">
                                                            {{ $husband->name }} </a>
                                                    </h4>
                                                    <!-- CARD TITLE : end -->


                                                    <!-- CARD DATE : begin -->
                                                    <p class="family-tree__card-date">
                                                        ({{ $husband->dateOfBirth }} - {{ $husband->dateOfDeath }}) </p>
                                                    <!-- CARD DATE : end -->


                                                </div>
                                            </div>
                                            <!-- CARD CONTENT : end -->


                                        </div>
                                    </div>
                                    <!-- CARD : end -->


                                </div>
                                <!-- PARTNER : end -->
                            @endforeach
                        @endif


                    </div>
                </div>
            </div>
            <!-- PARTNERS ROW : end -->


            <!-- CHILDREN ROW : begin -->
            <div class="family-tree__row family-tree__row--children family-tree__row--4-items family-tree__row--2-rows">
                <div class="family-tree__row-inner">
                    <div class="family-tree__grid family-tree__grid--children">

                        @if($person->sons($person->gender == 'male' ? 'father_id' : 'mother_id'))
                            @foreach($person->sons($person->gender == 'male' ? 'father_id' : 'mother_id') as $child)
                                <!-- CHILD : begin -->
                                <div class="family-tree__grid-item">


                                    <!-- CARD : begin -->
                                    <div class="family-tree__card family-tree__card--child" data-post-id="82" data-card-type="child">
                                        <div class="family-tree__card-inner">


                                            <!-- CARD LABEL : begin -->
                                            <h3 class="family-tree__card-label">
                                                <span class="family-tree__card-label-inner">
                                                    {{ $child->gender == 'male' ? 'ابن' : 'ابنة' }} </span>
                                            </h3>
                                            <!-- CARD LABEL : end -->


                                            <!-- CARD THUMB : begin -->
                                            <div class="family-tree__card-thumb">
                                                @if($child->photo)
                                                <a href="{{ asset($child->photo) }}" class="family-tree__card-thumb-link" style="background-image: url( {{ asset($child->photo) }} ) ">
                                                    <span class="screen-reader-text">Go to profile page</span>
                                                </a>
                                                @else
                                                <a href="{{ asset('template/app-assets/images/portrait/medium/avatar-m-4.png') }}" class="family-tree__card-thumb-link" style="background-image: url( {{ asset('template/app-assets/images/portrait/medium/avatar-m-4.png') }} );">
                                                    <span class="screen-reader-text">Go to profile page</span>
                                                </a>
                                                @endif
                                            </div>
                                            <!-- CARD THUMB : end -->

                                            <!-- CARD CONTENT : begin -->
                                            <div class="family-tree__card-content">
                                                <div class="family-tree__card-content-inner">

                                                    <!-- CARD TITLE : begin -->
                                                    <h4 class="family-tree__card-title">
                                                        <a href="{{ route('family.member' ,['id' => $child->id]) }}" class="family-tree__card-title-link">
                                                            {{ $child->name }} </a>
                                                    </h4>
                                                    <!-- CARD TITLE : end -->


                                                    <!-- CARD DATE : begin -->
                                                    <p class="family-tree__card-date">
                                                        ({{ $child->dateOfBirth }} - {{ $child->dateOfDeath }}) </p>
                                                    <!-- CARD DATE : end -->


                                                </div>
                                            </div>
                                            <!-- CARD CONTENT : end -->


                                            <!-- CARD OPTIONS : begin -->
                                            <div class="family-tree__card-options">

                                                <!-- BRANCH : begin -->
                                                <!-- <a href="https://preview.lsvr.sk/lineago/family/steven-lewis/" class="family-tree__card-option family-tree__card-option--branch" title="Branch">
                                                    <span class="family-tree__card-option-icon" aria-hidden="true"></span>
                                                    <span class="family-tree__card-option-spinner lsvr-spinner" aria-hidden="true"></span>
                                                </a> -->
                                                @if(App\Models\Family::where($child->gender == 'male' ? 'father_id' : 'mother_id', $child->id)->exists())
                                                <button wire:click="getChildBranch({{ $child->id }})" class="family-tree__card-option" title="Branch">
                                                    <i class="la la-sitemap"></i>
                                                    <span class="family-tree__card-option-spinner lsvr-spinner" aria-hidden="true"></span>
                                                </button>
                                                @endif
                                                <!-- BRANCH : end -->

                                            </div>
                                            <!-- CARD OPTIONS : end -->


                                        </div>
                                    </div>
                                    <!-- CARD : end -->

                                </div>
                                <!-- CHILD : end -->
                            @endforeach
                        @endif

                    </div>
                </div>
            </div>
            <!-- CHILDREN ROW : end -->


        </div>
    </div>
    <!-- FAMILY TREE BRANCH : end -->

    <template x-for="branch in branches" :key="branch.person.id">
        <!-- FAMILY TREE BRANCH : begin -->
        <div class="family-tree__branch family-tree-page__branch--has-partners family-tree-page__branch--has-children" data-cols-num="4" data-root-id="77">
            <div class="family-tree__branch-inner">


                <!-- PARTNERS ROW : begin -->
                <div class="family-tree__row family-tree__row--partners">
                    <div class="family-tree__row-inner">
                        <div class="family-tree__grid family-tree__grid--partners">

                            <!-- ROOT : begin -->
                            <div class="family-tree__grid-item family-tree__grid-item--root">


                                <!-- CARD : begin -->
                                <div class="family-tree__card family-tree__card--root" data-post-id="77" data-card-type="root">
                                    <div class="family-tree__card-inner">


                                        <!-- CARD THUMB : begin -->
                                        <div class="family-tree__card-thumb">
                                            <template x-if="branch.person.photo">
                                                <a  :href="branch.person.photo" class="family-tree__card-thumb-link" :style="{'background-image': `url( ${branch.person.photo} )`}">
                                                    <span class="screen-reader-text">Go to profile page</span>
                                                </a>
                                            </template>
                                            <template x-if="branch.person.photo == null">
                                                <a href="{{ asset('template/app-assets/images/portrait/medium/avatar-m-4.png') }}" class="family-tree__card-thumb-link" style="background-image: url( {{ asset('template/app-assets/images/portrait/medium/avatar-m-4.png') }} );">
                                                    <span class="screen-reader-text">Go to profile page</span>
                                                </a>
                                            </template>
                                        </div>
                                        <!-- CARD THUMB : end -->

                                        <!-- CARD CONTENT : begin -->
                                        <div class="family-tree__card-content">
                                            <div class="family-tree__card-content-inner">

                                                <!-- CARD TITLE : begin -->
                                                <h4 class="family-tree__card-title">
                                                    <a :href="`family-member/?id=${branch.person.id}`" class="family-tree__card-title-link" x-text="branch.person.name">
                                                    </a>
                                                </h4>
                                                <!-- CARD TITLE : end -->


                                                <!-- CARD DATE : begin -->
                                                <p class="family-tree__card-date" x-text="`(${branch.person.dateOfBirth} - ${branch.person.dateOfDeath})`">
                                                </p>
                                                <!-- CARD DATE : end -->


                                            </div>
                                        </div>
                                        <!-- CARD CONTENT : end -->


                                    </div>
                                </div>
                                <!-- CARD : end -->


                            </div>
                            <!-- ROOT : end -->

                            
                            <template x-for="partner in branch.partners" :key="partner.id">
                                <!-- PARTNER : begin -->
                                <div class="family-tree__grid-item ">


                                    <!-- CARD : begin -->
                                    <div class="family-tree__card family-tree__card--partner" data-post-id="78" data-card-type="partner">
                                        <div class="family-tree__card-inner">


                                            <!-- CARD LABEL : begin -->
                                            <h3 class="family-tree__card-label">
                                                <span class="family-tree__card-label-inner" x-text="partner.gender=='male' ? 'زوج' : 'زوجة'">
                                                </span>
                                            </h3>
                                            <!-- CARD LABEL : end -->


                                            <!-- CARD THUMB : begin -->
                                            <div class="family-tree__card-thumb">
                                                <template x-if="partner.photo">
                                                    <a :href="partner.photo" class="family-tree__card-thumb-link" :style="{'background-image': `url( ${partner.photo} )`}">
                                                        <span class="screen-reader-text">Go to profile page</span>
                                                    </a>
                                                </template>
                                                <template x-if="partner.photo == null">
                                                    <a href="{{ asset('template/app-assets/images/portrait/medium/avatar-m-4.png') }}" class="family-tree__card-thumb-link" style="background-image: url( {{ asset('template/app-assets/images/portrait/medium/avatar-m-4.png') }} );">
                                                        <span class="screen-reader-text">Go to profile page</span>
                                                    </a>
                                                </template>
                                            </div>
                                            <!-- CARD THUMB : end -->

                                            <!-- CARD CONTENT : begin -->
                                            <div class="family-tree__card-content">
                                                <div class="family-tree__card-content-inner">

                                                    <!-- CARD TITLE : begin -->
                                                    <h4 class="family-tree__card-title">
                                                        <a :href="`family-member/?id=${partner.id}`" class="family-tree__card-title-link" x-text="partner.name">
                                                        </a>
                                                    </h4>
                                                    <!-- CARD TITLE : end -->


                                                    <!-- CARD DATE : begin -->
                                                    <p class="family-tree__card-date" x-text="`(${partner.dateOfBirth} - ${partner.dateOfDeath})`">
                                                         </p>
                                                    <!-- CARD DATE : end -->


                                                </div>
                                            </div>
                                            <!-- CARD CONTENT : end -->


                                        </div>
                                    </div>
                                    <!-- CARD : end -->


                                </div>
                                <!-- PARTNER : end -->
                            </template>
                                
                                


                        </div>
                    </div>
                </div>
                <!-- PARTNERS ROW : end -->


                <!-- CHILDREN ROW : begin -->
                <div class="family-tree__row family-tree__row--children family-tree__row--4-items family-tree__row--2-rows">
                    <div class="family-tree__row-inner">
                        <div class="family-tree__grid family-tree__grid--children">

                            <template x-for="(child, index) in branch.children" :key="child.id">
                                    <!-- CHILD : begin -->
                                    <div class="family-tree__grid-item" :id="index" :style="index == 0 ? 'grid-column-start: 2;' : ''">


                                        <!-- CARD : begin -->
                                        <div class="family-tree__card family-tree__card--child" data-post-id="82" data-card-type="child">
                                            <div class="family-tree__card-inner">


                                                <!-- CARD LABEL : begin -->
                                                <h3 class="family-tree__card-label">
                                                    <span class="family-tree__card-label-inner" x-text="child.gender == 'male' ? 'ابن' : 'ابنة'">
                                                    </span>
                                                </h3>
                                                <!-- CARD LABEL : end -->


                                                <!-- CARD THUMB : begin -->
                                                <div class="family-tree__card-thumb">
                                                    <template x-if="child.photo">
                                                        <a :href="child.photo" class="family-tree__card-thumb-link" :style="{'background-image': `url( ${child.photo} )`}">
                                                            <span class="screen-reader-text">Go to profile page</span>
                                                        </a>
                                                    </template>
                                                    <template x-if="!child.photo">
                                                        <a href="{{ asset('template/app-assets/images/portrait/medium/avatar-m-4.png') }}" class="family-tree__card-thumb-link" style="background-image: url( {{ asset('template/app-assets/images/portrait/medium/avatar-m-4.png') }} );">
                                                            <span class="screen-reader-text">Go to profile page</span>
                                                        </a>
                                                    </template>
                                                </div>
                                                <!-- CARD THUMB : end -->

                                                <!-- CARD CONTENT : begin -->
                                                <div class="family-tree__card-content">
                                                    <div class="family-tree__card-content-inner">

                                                        <!-- CARD TITLE : begin -->
                                                        <h4 class="family-tree__card-title">
                                                            <a :href="`family-member/?id=${child.id}`" class="family-tree__card-title-link" x-text="child.name">
                                                            </a>
                                                        </h4>
                                                        <!-- CARD TITLE : end -->


                                                        <!-- CARD DATE : begin -->
                                                        <p class="family-tree__card-date" x-text="`(${child.dateOfBirth} - ${child.dateOfDeath})`">
                                                             </p>
                                                        <!-- CARD DATE : end -->


                                                    </div>
                                                </div>
                                                <!-- CARD CONTENT : end -->


                                                <!-- CARD OPTIONS : begin -->
                                                <div class="family-tree__card-options">

                                                    <!-- BRANCH : begin -->
                                                    <!-- <a href="https://preview.lsvr.sk/lineago/family/steven-lewis/" class="family-tree__card-option family-tree__card-option--branch" title="Branch">
                                                        <span class="family-tree__card-option-icon" aria-hidden="true"></span>
                                                        <span class="family-tree__card-option-spinner lsvr-spinner" aria-hidden="true"></span>
                                                    </a> -->
                                                    <template x-if="child.hasChildren">
                                                        <button @click="$wire.getChildBranch(child.id, 1)" class="family-tree__card-option" title="Branch">
                                                            <i class="la la-sitemap"></i>
                                                            <span class="family-tree__card-option-spinner lsvr-spinner" aria-hidden="true"></span>
                                                        </button>
                                                    </template>
                                                    <!-- BRANCH : end -->

                                                </div>
                                                <!-- CARD OPTIONS : end -->


                                            </div>
                                        </div>
                                        <!-- CARD : end -->

                                    </div>
                                    <!-- CHILD : end -->
                                </template>

                        </div>
                    </div>
                </div>
                <!-- CHILDREN ROW : end -->


            </div>
        </div>
        <!-- FAMILY TREE BRANCH : end -->
    </template>


</div>