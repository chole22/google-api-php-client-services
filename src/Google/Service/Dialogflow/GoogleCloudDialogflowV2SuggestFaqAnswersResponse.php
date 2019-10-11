<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

class Google_Service_Dialogflow_GoogleCloudDialogflowV2SuggestFaqAnswersResponse extends Google_Collection
{
  protected $collection_key = 'faqAnswers';
  public $contextSize;
  protected $faqAnswersType = 'Google_Service_Dialogflow_GoogleCloudDialogflowV2FaqAnswer';
  protected $faqAnswersDataType = 'array';
  public $latestMessage;

  public function setContextSize($contextSize)
  {
    $this->contextSize = $contextSize;
  }
  public function getContextSize()
  {
    return $this->contextSize;
  }
  /**
   * @param Google_Service_Dialogflow_GoogleCloudDialogflowV2FaqAnswer
   */
  public function setFaqAnswers($faqAnswers)
  {
    $this->faqAnswers = $faqAnswers;
  }
  /**
   * @return Google_Service_Dialogflow_GoogleCloudDialogflowV2FaqAnswer
   */
  public function getFaqAnswers()
  {
    return $this->faqAnswers;
  }
  public function setLatestMessage($latestMessage)
  {
    $this->latestMessage = $latestMessage;
  }
  public function getLatestMessage()
  {
    return $this->latestMessage;
  }
}
