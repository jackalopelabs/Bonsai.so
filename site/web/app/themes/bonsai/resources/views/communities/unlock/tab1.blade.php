<div class="" id="accordion">
  <h3 class="text-muted small">Categories:</h3>
  <ul class="accordion mb-0">
    <li>
      <a class="toggle card show" href="javascript:void(0);">
        <small class="mute uppercase"><i class="fas fa-graduation-cap mr-2"></i></small>
        <span class="mr-3">Tutorials</span>
        <span class="badge badge-success mr-2 float-right">Free</span>
      </a>
      <ul class="inner mt-3" style="">

        <div class="" id="tab1" role="tabpanel">
          <div class="" id="accordion">
            <ul class="accordion mb-0">
              <li>
                <a class="toggle card" href="javascript:void(0);">
                  <span class="mr-4"><i class="fas fa-palette mr-2 text-muted"></i> For Creators</span>
                  <div class="float-right d-flex">
                    <span class="badge badge-light hidden-xs-flex">8</span>
                  </div>
                </a>
                @query([
                'posts_per_page' => 20,
                'post_type' => 'post',
                'cat' => '11',
                'order' => 'ASC'
                ])

                <ul class="inner mt-3" style="">
                  @posts
                  <li>
                    <a href="" class="toggle card">@title</a>
                    <div class="inner">
                      @excerpt
                      <a href="@permalink" class="btn btn-sm btn-success">Full tutorial <i class="fas fa-arrow-right ml-2 pt-1"></i></a>
                    </div>
                  </li>
                  @endposts
                </ul>
              </li>

              <li>
                <a class="toggle card" href="javascript:void(0);">
                  <span class="mr-4"><i class="fas fa-code mr-2 text-muted"></i> For Developers</span>
                  <div class="float-right d-flex">
                    <span class="badge badge-light hidden-xs-flex">9</span>
                  </div>
                </a>
                <ul class="inner show" style="display: block;">
                  <li>
                    <a href="https://docs.unlock-protocol.com/unlock/developers/tutorials/using-subgraphs" target="_blank" class="toggle-ext card">
                      Using Subgraphs
                      <small class="float-right pt-1"><i class="fas fa-external-link-alt text-muted"></i></small>
                    </a>
                  </li>

                  <li>
                    <a href="https://docs.unlock-protocol.com/unlock/developers/tutorials/using-unlock-in-other-contracts" target="_blank" class="toggle-ext card">
                      Using Unlock in Other Contracts
                      <small class="float-right pt-1"><i class="fas fa-external-link-alt text-muted"></i></small>
                    </a>
                  </li>

                  <li>
                    <a href="https://docs.unlock-protocol.com/unlock/developers/tutorials/ethers" target="_blank" class="toggle-ext card">
                      Using Unlock with Ethers
                      <small class="float-right pt-1"><i class="fas fa-external-link-alt text-muted"></i></small>
                    </a>
                  </li>

                  <li>
                    <a href="https://docs.unlock-protocol.com/unlock/developers/tutorials/backend-locking-with-express.js" target="_blank" class="toggle-ext card">
                      Backend Locking with Express.js
                      <small class="float-right pt-1"><i class="fas fa-external-link-alt text-muted"></i></small>
                    </a>
                  </li>

                  <li>
                    <a href="https://docs.unlock-protocol.com/unlock/developers/tutorials/locking-media-content" target="_blank" class="toggle-ext card">
                      Locking Media Content
                      <small class="float-right pt-1"><i class="fas fa-external-link-alt text-muted"></i></small>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </ul>
    </li>

    <li>
      <a class="toggle card show" href="javascript:void(0);">
        <small class="mute uppercase"><i class="fas fa-font mr-2 text-muted"></i></small>
        <span class="mr-3">Docs</span>
        <span class="badge badge-success mr-2 float-right">Free</span>
      </a>
      <ul class="inner mt-3" style="">

        <li>
          <a href="https://docs.unlock-protocol.com/unlock/" target="_blank" class="toggle-ext card">
            <small class="text-muted">Introduction</small>
            <small class="float-right pt-1"><i class="fas fa-external-link-alt text-muted"></i></small>
          </a>
        </li>

        <li>
          <a href="https://docs.unlock-protocol.com/unlock/our-code-of-conduct" target="_blank" class="toggle-ext card">
            <small class="text-muted">Our Code of Conduct</small>
            <small class="float-right pt-1"><i class="fas fa-external-link-alt text-muted"></i></small>
          </a>
        </li>

        <div class="" id="tab1" role="tabpanel">
          <div class="" id="accordion">
            <ul class="accordion mb-0">
              <li>
                <a class="toggle card" href="javascript:void(0);">
                  <span class="mr-4"><i class="fas fa-palette mr-2 text-muted"></i> For Creators</span>
                  <div class="float-right d-flex">
                    <span class="badge badge-light hidden-xs-flex">8</span>
                  </div>
                </a>
                <ul class="inner show" style="display: block;">
                  <li>
                    <a href="https://docs.unlock-protocol.com/unlock/creators/faq" target="_blank" class="toggle-ext card">
                      Creators FAQ
                      <small class="float-right pt-1"><i class="fas fa-external-link-alt text-muted"></i></small>
                    </a>
                  </li>

                  <li>
                    <a href="https://docs.unlock-protocol.com/unlock/creators/deploying-lock" target="_blank" class="toggle-ext card">
                      Creating a Lock
                      <small class="float-right pt-1"><i class="fas fa-external-link-alt text-muted"></i></small>
                    </a>
                  </li>

                  <li>
                    <a href="https://docs.unlock-protocol.com/unlock/creators/enabling-credit-cards" target="_blank" class="toggle-ext card">
                      Enabling Credit Cards
                      <small class="float-right pt-1"><i class="fas fa-external-link-alt text-muted"></i></small>
                    </a>
                  </li>

                  <li>
                    <a href="https://docs.unlock-protocol.com/unlock/creators/customizing-the-nft" target="_blank" class="toggle-ext card">
                      Customizing the NFT
                      <small class="float-right pt-1"><i class="fas fa-external-link-alt text-muted"></i></small>
                    </a>
                  </li>

                  <li>
                    <a href="https://docs.unlock-protocol.com/unlock/creators/selling-memberships" target="_blank" class="toggle-ext card">
                      Selling Memberships
                      <small class="float-right pt-1"><i class="fas fa-external-link-alt text-muted"></i></small>
                    </a>
                  </li>

                  <li>
                    <a href="https://docs.unlock-protocol.com/unlock/creators/unlock-accounts" target="_blank" class="toggle-ext card">
                      Unlock Accounts
                      <small class="float-right pt-1"><i class="fas fa-external-link-alt text-muted"></i></small>
                    </a>
                  </li>

                  <li>
                    <a href="https://docs.unlock-protocol.com/unlock/creators/plugins-and-integrations" target="_blank" class="toggle-ext card">
                      Plugins and Integrations
                      <small class="float-right pt-1"><i class="fas fa-external-link-alt text-muted"></i></small>
                    </a>
                  </li>
                </ul>
              </li>

              <li>
                <a class="toggle card" href="javascript:void(0);">
                  <span class="mr-4"><i class="fas fa-code mr-2 text-muted"></i> For Developers</span>
                  <div class="float-right d-flex">
                    <span class="badge badge-light hidden-xs-flex">9</span>
                  </div>
                </a>
                <ul class="inner show" style="display: block;">
                  <li>
                    <a href="https://docs.unlock-protocol.com/unlock/developers/unlock-platform" target="_blank" class="toggle-ext card">
                      Overview
                      <small class="float-right pt-1"><i class="fas fa-external-link-alt text-muted"></i></small>
                    </a>
                  </li>

                  <li>
                    <a href="https://docs.unlock-protocol.com/unlock/developers/building-token-gated-applications" target="_blank" class="toggle-ext card">
                      Building Token Gated Applications
                      <small class="float-right pt-1"><i class="fas fa-external-link-alt text-muted"></i></small>
                    </a>
                  </li>

                  <li>
                    <a href="https://docs.unlock-protocol.com/unlock/creators/enabling-credit-cards" target="_blank" class="toggle-ext card">
                      Smart Contracts
                      <small class="float-right pt-1"><i class="fas fa-external-link-alt text-muted"></i></small>
                    </a>
                  </li>

                  <li>
                    <a href="https://docs.unlock-protocol.com/unlock/developers/sign-in-with-ethereum" target="_blank" class="toggle-ext card">
                      Sign in with Ethereum
                      <small class="float-right pt-1"><i class="fas fa-external-link-alt text-muted"></i></small>
                    </a>
                  </li>

                  <li>
                    <a href="https://docs.unlock-protocol.com/unlock/developers/unlock.js" target="_blank" class="toggle-ext card">
                      Unlock.js
                      <small class="float-right pt-1"><i class="fas fa-external-link-alt text-muted"></i></small>
                    </a>
                  </li>

                  <li>
                    <a href="https://docs.unlock-protocol.com/unlock/developers/subgraph" target="_blank" class="toggle-ext card">
                      Subgraph
                      <small class="float-right pt-1"><i class="fas fa-external-link-alt text-muted"></i></small>
                    </a>
                  </li>

                  <li>
                    <a href="https://docs.unlock-protocol.com/unlock/developers/paywall" target="_blank" class="toggle-ext card">
                      Paywall
                      <small class="float-right pt-1"><i class="fas fa-external-link-alt text-muted"></i></small>
                    </a>
                  </li>

                  <li>
                    <a href="https://docs.unlock-protocol.com/unlock/developers/locksmith" target="_blank" class="toggle-ext card">
                      Locksmith
                      <small class="float-right pt-1"><i class="fas fa-external-link-alt text-muted"></i></small>
                    </a>
                  </li>

                  <li>
                    <a href="https://docs.unlock-protocol.com/unlock/developers/faq" target="_blank" class="toggle-ext card">
                      Developers FAQ
                      <small class="float-right pt-1"><i class="fas fa-external-link-alt text-muted"></i></small>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </ul>
    </li>
  </ul>
</div>
